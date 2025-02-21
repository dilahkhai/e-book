<?php

namespace App\Http\Controllers;

use App\Models\DownloadedBook;
use App\Models\Book;
use App\Models\BookCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookLinkMail;
use Carbon\Carbon;

class DownloadedBookController extends Controller
{
    public function index()
    {
        $downloadedBooks = DownloadedBook::all();
        $books = Book::all();

        return view('admin.downloaded_history', compact('downloadedBooks', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'books_id' => 'required|exists:books,id',
            'code_id' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    $exists = BookCode::where('books_id', $request->books_id)
                                      ->where('code', $value)
                                      ->exists();
                    if (!$exists) {
                        $fail('Invalid reference code.');
                    }
                },
            ],
            'cust_name' => 'required|string|max:255',
            'cust_org' => 'nullable|string|max:255',
            'cust_email' => 'required|email|max:255',
        ]);

        $bookCode = BookCode::where('books_id', $request->books_id)
                    ->where('code', $request->code_id)
                    ->first();

        if (!$bookCode) {
            return response()->json(['error' => 'Invalid reference code.'], 400);
        }

        $agents_id = $bookCode->agent_id;

        // dd($request->all());        
        $downloadedBook = DownloadedBook::create([
            'books_id' => $request->books_id,
            'code_id' => $request->code_id,
            'agents_id' => $agents_id,
            'cust_name' => $request->cust_name,
            'cust_org' => $request->cust_org,
            'cust_email' => $request->cust_email,
            'downloaded_date' => Carbon::now(),
        ]);

        $book = Book::where('id', $request->books_id)->first();
        if (!$book) {
            return response()->json(['error' => 'Book not found.'], 404);
        }
        Mail::to($request->cust_email)->send(new BookLinkMail($book));
        return response()->json(['message' => 'Download link sent successfully.'], 200);
    }
}

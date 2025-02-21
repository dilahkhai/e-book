<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadedBook;
use App\Models\Agent;
use App\Models\BookCode;
use App\Models\Book;


class BookCodeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $agents = Agent::all();
        $codes = BookCode::with(['book', 'agent'])->get();

        return view('admin.codes', compact('books', 'agents', 'codes'));
    }

    public function welcome()
    {
        $books = Book::all();
        $agents = Agent::all();
        $codes = BookCode::all();

        return view('welcome', compact('books', 'agents', 'codes'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'books_id' => 'required|exists:books,id',
            'agent_id' => 'required|exists:agents,id',
        ]);

        $code = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));

        $bookCode = new BookCode();
        $bookCode->books_id = $request->books_id;
        $bookCode->agent_id = $request->agent_id;
        $bookCode->code = $code; 
        $bookCode->save();


        return back()->with('success', 'Succesfully Generated New Code');
    }
}

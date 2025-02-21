<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadedBook;
use App\Models\Agent;
use App\Models\BookCode;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $agents = Agent::all();

        return view('admin.books', compact('books', 'agents'));
    }

    public function dashboard()
    {
        $books = Book::all();
        $agents = Agent::all();
        $downloadedBooks = DownloadedBook::all();

        return view('admin.dashboard', compact('books', 'agents', 'downloadedBooks'));
    }

    public function bookPerformance($id)
    {
        $books = Book::find($id);
        $agents = Agent::all();

        return view('admin.dashboard', compact('books', 'agents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf|max:5048',
            'image' => 'required|file|mimes:jpg,jpeg,png|max:5048',
        ]);

        $books = new Book();
        $books->title = $request->title;


        if ($request -> hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->storeAs('files', time() . '_' . $file->getClientOriginalName(), 'public');
            $books->file = $filePath;
        }

        if ($request -> hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('images', time() . '_' . $image->getClientOriginalName(), 'public');
            $books->image = $imagePath;
        }

        $books->save();

        return redirect()->back();
    }

    public function destroy($id) 
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->back();
    }
}

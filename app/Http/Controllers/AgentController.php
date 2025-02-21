<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DownloadedBook;
use App\Models\Agent;
use App\Models\BookCode;
use App\Models\Book;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::all();

        return view('admin.agents', compact('agents'));
    }

    public function agentPerformance()
    {
        $books = Book::all();
        $agents = Agent::all();
        $codes = BookCode::all();
        $download = DownloadedBook::all();

        return view('admin.agent_performance', compact('books', 'agents', 'codes', 'download'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'agent' => 'required|string|max:255',
            'agent_email' => 'required|string|max:255',
        ]);

        $agents = new Agent($request->all());
        $agents->save();

        return back();
    }

    public function destroy($id) 
    {
        $agents = Agent::find($id);
        $agents->delete();

        return redirect()->back();
    }
}

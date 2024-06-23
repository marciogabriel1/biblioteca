<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Auth::user()->books;
        $books = Book::paginate(5);
        return view('dashboard', compact('books'));
    }

    public function create()
    {
        return view('create_book');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
        ]);

        Auth::user()->books()->create($request->all());

        return redirect()->route('dashboard');
    }

    public function edit(Book $book)
    {
        if ($book->user_id != Auth::id()) {
            return redirect()->route('dashboard');
        }
        return view('edit_book', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        if ($book->user_id != Auth::id()) {
            return redirect()->route('dashboard');
        }

        $request->validate([
            'author' => 'required',
            'title' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('dashboard');
    }

    public function destroy(Book $book)
    {
        if ($book->user_id != Auth::id()) {
            return redirect()->route('dashboard');
        }

        $book->delete();

        return redirect()->route('dashboard');
    }
}

<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        // Obtendo os livros do usuário autenticado
        $books = Auth::user()->books;
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
            // Adicione validações para outros campos conforme necessário
        ]);

        // Criando um novo livro para o usuário autenticado
        Auth::user()->books()->create($request->all());

        return redirect()->route('dashboard');
    }
}

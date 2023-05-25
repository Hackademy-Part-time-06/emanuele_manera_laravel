<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index () {
        $books = Book::all(); // metodo per importare dati dalla tabella 
        return view('book.index', ['books'=>$books]);
    }

    public function create () {
        // Lezione008/Library/app/View/book/create.blade.php
        return view('book.create');
    }

    public function store (Request $request) {

        // creazione libro di test salvando i dati utilizzando il metodo new Book() 
        // rotta utilizzata Route::get('/libri/salva', [BookController::class, 'store'])->name('book.store'); 
        /* $book = new Book();
        $book->title = "Test del titolo";
        $book->pages = 99;
        $book->author = "Test dell'autore"; 
        $book->year = 2000; 
        $book->save();
        dd('Crea libro di test'); */

        // creazione libro salvando i dati utilizzando il metodo Book::create([]) 
        // $bookTest = 
        Book::create([
            'title' => $request->title,
            'pages' => $request->pages,
            'author' => $request->author,
            'year' => $request->year,
        ]); 

        // dd($bookTest); 

        // blocco di validazione dati form 
        $request->validate([
            "title" => "required|string",
            "pages" => "required|numeric",
            "author" => "required|string",
            "year" => "required|numeric",
        ]);

        return redirect()->route('book.index')->with(['success' => 'Libro aggiunto alla lista']);
    }

    public function show ($libro) {

        $searchBook = Book::find($libro); 

        if (is_null($searchBook)) {
            abort(404);
        }

        // $searchBook = Book::findOrFail($libro); 

        return view('book.show', ['libro'=>$searchBook]);
    }
}

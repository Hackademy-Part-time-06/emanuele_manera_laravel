<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index () {
        $books = Book::all(); // metodo per importare dati dalla tabella 
        return view('layouts.index', ['books'=>$books]);
    }
}

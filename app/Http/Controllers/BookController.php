<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);

        return view('books.index', compact('books'));
    }
}

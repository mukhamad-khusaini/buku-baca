<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class WelcomeController extends Controller
{
    public function index()
    {
        // Ambil data buku dari BookController
        $books = Book::all();
        // Return view dengan data buku
        return view('welcome', ['books' => $books]);
    }
}

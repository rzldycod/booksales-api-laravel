<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Import class Book

class BookController extends Controller
{
    public function index() {
        $data = new Book();
        $books = $data->getBooks(); // Mengambil data dari properti $books

        return view('books', ['books' => $books]);
    }
}

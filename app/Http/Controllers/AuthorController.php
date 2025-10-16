<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'status' => 'success',
            'data' => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'nullable|string|max:255',
        ]);

        $author = Author::create([
            'name' => $request->name,
            'country' => $request->country,
        ]);

        return response()->json([
            'status' => 'created',
            'data' => $author
        ], 201);
    }
}

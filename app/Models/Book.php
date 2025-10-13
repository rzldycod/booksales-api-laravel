<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Dune',
            'description' => 'Science fiction novel by Frank Herbert',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'dune.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Justice League',
            'description' => 'Comic book series by DC Comics',
            'price' => 30000,
            'stock' => 10,
            'cover_photo' => 'justice_league.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'Texas Chainsaw Massacre',
            'description' => 'Horror novel by Stephen King',
            'price' => 35000,
            'stock' => 8,
            'cover_photo' => 'texas_chainsaw_massacre.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]
    ];

    public function getBooks() {
        return $this->books;
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Fantastic Mr Fox',
            'description' => 'A cunning fox outwits three farmers to steal food for his family in this classic children\'s novel by Roald Dahl.',
            'price' => 40000,
            'stock' => 10,
            'cover_photo' => 'https://example.com/fantastic_mr_fox.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Little Women',
            'description' => 'The lives of the four March sisters—Meg, Jo, Beth, and Amy—during the American Civil War, as they navigate love, loss, and growing up.',
            'price' => 50000,
            'stock' => 5,
            'cover_photo' => 'https://example.com/little_women.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Sherlock Holmes: The Complete Novels and Stories',
            'description' => 'A collection of all the adventures of the legendary detective Sherlock Holmes, created by Sir Arthur Conan Doyle.',
            'price' => 75000,
            'stock' => 8,
            'cover_photo' => 'https://example.com/sherlock_holmes.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]);
    }
}

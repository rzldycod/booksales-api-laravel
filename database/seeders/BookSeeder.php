<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Charlie and the Chocolate Factory', 'genre' => 'Fantasy', 'author' => 'Roald Dahl', 'year' => 1964, 'price' => 120000],
            ['title' => 'Dune', 'genre' => 'Science Fiction', 'author' => 'Frank Herbert', 'year' => 1965, 'price' => 180000],
            ['title' => 'Pride and Prejudice', 'genre' => 'Romance', 'author' => 'Jane Austen', 'year' => 1813, 'price' => 110000],
            ['title' => 'It', 'genre' => 'Horror', 'author' => 'Stephen King', 'year' => 1986, 'price' => 160000],
            ['title' => 'Foundation', 'genre' => 'Science Fiction', 'author' => 'Isaac Asimov', 'year' => 1951, 'price' => 140000],
        ]);
    }
}

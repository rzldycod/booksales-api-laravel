<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('authors')->insert([
           ['name' => 'Roald Dahl', 'country' => 'United Kingdom', 'age' => 54, 'genre' => 'Fantasy'],
           ['name' => 'Frank Herbert', 'country' => 'United States', 'age' => 65, 'genre' => 'Science Fiction'],
           ['name' => 'Jane Austen', 'country' => 'United Kingdom', 'age' => 41, 'genre' => 'Romance'],
           ['name' => 'Stephen King', 'country' => 'United States', 'age' => 77, 'genre' => 'Horror'],
           ['name' => 'Isaac Asimov', 'country' => 'Russia', 'age' => 72, 'genre' => 'Science Fiction'],
       ]);
    }
}

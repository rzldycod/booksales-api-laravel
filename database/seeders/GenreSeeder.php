<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Action books are characterized by fast-paced plots, high stakes, and intense sequences of events that keep readers on the edge of their seats.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Romance books focus on the development of a romantic relationship between characters, often featuring emotional conflicts and happy endings.'
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'description' => 'Science fiction books explore futuristic concepts, advanced technology, space exploration, and often address complex social and philosophical issues.'
        ]);
    }
}

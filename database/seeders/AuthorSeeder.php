<?php

namespace Database\Seeders;

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
            ['name' => 'Author 1', 'country' => 'USA'],
            ['name' => 'Author 2', 'country' => 'UK'],
            ['name' => 'Author 3', 'country' => 'Canada'],
        ]);
    }
}
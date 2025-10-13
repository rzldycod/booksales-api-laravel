<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Science Fiction', 'description' => 'A genre of speculative fiction.'],
            ['id' => 2, 'name' => 'Fantasy', 'description' => 'A genre of imaginative fiction.'],
            ['id' => 3, 'name' => 'Mystery', 'description' => 'A genre involving suspense and solving a crime.'],
            ['id' => 4, 'name' => 'Romance', 'description' => 'A genre focused on romantic relationships.'],
            ['id' => 5, 'name' => 'Horror', 'description' => 'A terrifying genre intended to scare and unsettle.'],
        ];
    }
}
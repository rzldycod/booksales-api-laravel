<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Isaac Asimov', 'country' => 'USA'],
            ['id' => 2, 'name' => 'J.K. Rowling', 'country' => 'UK'],
            ['id' => 3, 'name' => 'Agatha Christie', 'country' => 'UK'],
            ['id' => 4, 'name' => 'Haruki Murakami', 'country' => 'Japan'],
            ['id' => 5, 'name' => 'Stephen King', 'country' => 'USA'],
        ];
    }
}

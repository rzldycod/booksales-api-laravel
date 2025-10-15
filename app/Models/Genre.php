<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    // Tambahkan properti $fillable untuk mendukung mass-assignment
    protected $fillable = ['name', 'description'];
}
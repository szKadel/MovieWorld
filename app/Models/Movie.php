<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'imdb_id',
        'genres',
        'backdrop_path',
        'budget',
        'original_language',
        'original_title',
        'overview',
        'poster_path',
        'production_companies'
    ];
}

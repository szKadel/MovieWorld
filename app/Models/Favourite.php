<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    public $fillable = [
        'id',
        'imdb_id',
        'poster_path',
        'my_rate',
        'watch_list',
        'favourtie',
        'watched'
    ];
}

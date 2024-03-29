<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    protected $table = "favourite_movie";

    public $fillable = [
        'id',
        'movie_id',
        'my_rate',
        'watch_list',
        'favourtie',
        'watched'
    ];
}

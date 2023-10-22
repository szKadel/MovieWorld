<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $table = "movies";

    private string $scopeName = "movie";

    public $fillable = [
        'id',
        'external_id',
        'imdb_id',
        'backdrop_path',
        'genres',
        'budget',
        'original_language',
        'original_title',
        'overview',
        'poster_path' ,
        'production_companies'
    ];

    public function getScopeName():string
    {
        return $this->scopeName;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    private string $scopeName = "serie";

    public function getScopeName():string
    {
        return $this->scopeName;
    }

    public $fillable = [
        'id',
        'imdb_id',
        'backdrop_path',
        'first_air_date',
        'origin_country',
        'overview',
        'popularity',
        'poster_path',
        'vote_average',
        'vote_count',
        'original_language',
        'original_name',
    ];
}

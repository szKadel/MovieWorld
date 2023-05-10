<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    private string $scopeName = "person";

    public function getScopeName():string
    {
        return $this->scopeName;
    }

    public $fillable = [
        'id',
        'imdb_id',
        'popularity',
        'profile_path',
        'place_of_birth',
        'name',
        'known_for_department',
        'gender',
        'homepage',
        'gender',
        'deathday',
        'birthday',
        'biography',
        'also_known_as',
        'adult'
    ];



}

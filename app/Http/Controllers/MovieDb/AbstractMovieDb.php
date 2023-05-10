<?php

namespace App\Http\Controllers\MovieDb;

use App\Http\Controllers\Controller;

abstract class AbstractMovieDb extends Controller
{
    protected int $id;
    protected string $imgUrl;
}

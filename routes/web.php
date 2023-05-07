<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $result = new \App\Services\ImdbService;
    $data = $result ->call("/movie/popular",[]);

    $result = [];

    foreach ($data["results"] as $movie) {
        $class = new Movie();
        $result[] = $class->fill($movie);
    }

    return view('list',['movie'=> $result]);
});

Route::get('/series', function () {
    $result = new \App\Services\ImdbService;
    $data = $result ->call("/tv/popular",[]);

    $result = [];

    foreach ($data["results"] as $movie) {
        $class = new Movie();
        $result[] = $class->fill($movie);
    }

    return view('list',['movie'=> $result]);
});

Route::get('/persons', function () {
    $result = new \App\Services\ImdbService;
    $data = $result ->call("/person/popular",[]);

    $result = [];

    foreach ($data["results"] as $movie) {
        $class = new Movie();
        $result[] = $class->fill($movie);
    }

    return view('list',['movie'=> $result]);
});

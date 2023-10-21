<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Movie;
use App\Models\Serie;
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

Route::get('/serie', function () {
    $result = new \App\Services\ImdbService;
    $data = $result ->call("/tv/popular",[]);

    $result = [];

    foreach ($data["results"] as $movie) {
        $class = new Serie();
        $result[] = $class->fill($movie);
    }

    return view('list',['movie'=> $result]);
});

Route::get('/person', function () {
    $result = new \App\Services\ImdbService;
    $data = $result ->call("/person/popular",[]);

    $result = [];

    foreach ($data["results"] as $movie) {
        $class = new \App\Models\Actor();
        $result[] = $class->fill($movie);
    }

    return view('list',['movie'=> $result]);

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/',[\App\Http\Controllers\MovieController::class,'index'])-> middleware('auth');
    Route::get('/person/{id}',[\App\Http\Controllers\ActorController::class,'show']);
    Route::get('/serie/{id}',[\App\Http\Controllers\SerieController::class,'show']);
    Route::get('/movie/favourite/',[\App\Http\Controllers\FavouriteController::class,'index']);
    Route::get('/movie/favourite/add/{id}',[\App\Http\Controllers\FavouriteController::class,'create']);
    Route::get('/movie/{id}',[\App\Http\Controllers\MovieController::class,'show']);
    Route::post('/movie/favourite/',[\App\Http\Controllers\FavouriteController::class,'store']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


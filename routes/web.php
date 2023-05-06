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

    $data = $result ->call("/authentication/guest_session/new",[]);

    $class = new Movie();


    return view('welcome',['movie'=>$class]);
});

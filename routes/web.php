<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get('/', function () {
    $comics = config('comics');
    return view('home', ['comics' => $comics]);
})->name('home');

// NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');
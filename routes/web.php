<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::view('/characters', 'characters')->name('characters');
Route::view('/comics', 'comics')->name('comics');
Route::view('/movies', 'movies')->name('movies');
Route::view('/tv', 'tv')->name('tv');
Route::view('/games', 'games')->name('games');
Route::view('/videos', 'videos')->name('videos');
Route::view('/news', 'news')->name('news');
Route::view('/shop', 'shop')->name('shop');

Route::view('/signup', 'signup')->name('signup');
Route::post('/signup', function () {
    // Logica per gestire i dati del form
    return redirect()->route('signup')->with('success', 'Sign-Up completed successfully!');
})->name('signup.submit');
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::view('/signup', 'signup')->name('signup');
Route::post('/signup', function () {
    // Logica per gestire i dati del form
    return redirect()->route('signup')->with('success', 'Sign-Up completed successfully!');
})->name('signup.submit');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/master', function () {
    return view('layouts.master');
})->name('master');
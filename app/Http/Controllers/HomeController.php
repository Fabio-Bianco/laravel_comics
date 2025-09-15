<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Recupera direttamente i fumetti
        $comics = config('comics', []);

        return view('homepage', ['comics' => $comics]);
    }
}

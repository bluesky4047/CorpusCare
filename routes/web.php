<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('home');
});

// Halaman Biodata
Route::get('/biodata', function () {
    return view('biodata');
});

// Halaman Hobi (bebas)
Route::get('/hobi', function () {
    return view('hobi');
});

// Halaman Kontak/Medsos
Route::get('/kontak', function () {
    return view('kontak');
});
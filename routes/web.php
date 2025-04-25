<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.home');
});

Route::get('/profile', function () {
    return view('customer.profile');
})->name('profile');

Route::get('/home', function () {
    return view('customer.home');
})->name('home');

Route::get('/katalog', function () {
    return view('customer.katalog');
})->name('katalog');

Route::get('/cart', function () {
    return view('customer.cart');
})->name('cart');

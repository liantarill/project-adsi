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


Route::get('/order', function () {
    return view('artist.order');
})->name('order');

Route::get('/cust-chat', function () {
    return view('customer.cust-chat');
})->name('cust-chat');

Route::get('/my-katalog', function () {
    return view('artist.my-katalog');
})->name('my-katalog');

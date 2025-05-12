<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/checkout', function () {
    return view('customer.checkout');
})->name('checkout');



Route::get('/purchase', function (Request $request) {
    $activeTab = $request->get('tab', 'all'); // default ke 'all' jika tidak ada ?tab

    switch ($activeTab) {
        case 'unpaid':
            return view('customer.purchase.unpaid');
        case 'processing':
            return view('customer.purchase.processing');
        case 'shipped':
            return view('customer.purchase.shipped');
        case 'completed':
            return view('customer.purchase.completed');
        default:
            return view('customer.purchase.all');
    }
})->name('purchase.all');




Route::get('/order', function () {
    return view('artist.order');
})->name('order');

Route::get('/cust-chat', function () {
    return view('customer.cust-chat');
})->name('cust-chat');

Route::get('/my-katalog', function () {
    return view('artist.my-katalog');
})->name('my-katalog');

Route::get('/report', function () {
    return view('artist.report');
})->name('report');


Route::get('/manage-accounts', function () {
    return view('admin.manage-accounts');
})->name('manage-accounts');

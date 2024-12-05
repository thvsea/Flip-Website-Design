<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/products', function () {
    return view('product');
})->name('products');

Route::get('/sendmoney', function () {
    return view('sendmoney');
})->name('sendmoney');

Route::get('/ewallet', function () {
    return view('ewallet');
})->name('ewallet');

Route::get('/digitalproducts', function () {
    return view('digitalproducts');
})->name('digitalproducts');

Route::get('/flipglobe', function () {
    return view('flipglobe');
})->name('flipglobe');

Route::get('/flipbusiness', function () {
    return view('flipbusiness');
})->name('flipbusiness');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/catalog-tea', function () {
    return view('catalog-tea');
});

Route::get('/catalog-smesi', function () {
    return view('catalog-smesi');
});

Route::get('/catalog-ytvar', function () {
    return view('catalog-ytvar');
});

Route::get('/sale', function () {
    return view('sale');
});

Route::get('/shop', function () {
    return view('shop');
});

require_once __DIR__ . '/auth.php';


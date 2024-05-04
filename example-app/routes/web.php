<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/', [ProductController::class, 'show'])->name('welcome');
Route::get('/sale', [ProductController::class, 'show2'])->name('sale');
Route::get('/catalog', [ProductController::class, 'show3'])->name('catalog');
Route::get('/catalog-ytvar', [ProductController::class, 'show4'])->name('catalog-ytvar');
Route::get('/catalog-tea', [ProductController::class, 'show5'])->name('catalog-tea');
Route::get('/catalog-smesi', [ProductController::class, 'show6'])->name('catalog-smesi');

require_once __DIR__ . '/auth.php';


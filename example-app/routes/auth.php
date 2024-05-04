<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth');
    Route::get('/reg', [RegistrationController::class, 'index'])->name('reg');
    Route::post('/reg', [RegistrationController::class, 'register'])->name('register');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('add.to.cart');
    Route::get('/user/{id}/buy', [CartController::class, 'showListAndAdress'])->name('buy');
    Route::delete('/user/buy/{id}', [CartController::class, 'remove'])->name('cart.remove');
});

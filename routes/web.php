<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);

Route::prefix('products')->group(function () {
    Route::get('/{slug}', [App\Http\Controllers\ProductController::class, 'show'])
        ->name('products.show');
});

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])
        ->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'store'])
        ->name('login.store');

    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])
        ->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])
        ->name('register.store');
});

Route::post('/logout', App\Http\Controllers\Auth\LogoutController::class)
    ->name('logout');

Route::prefix('cart')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\CartController::class, 'index'])
        ->name('cart.index');
    Route::post('/add', [App\Http\Controllers\CartController::class, 'addToCart'])
        ->name('cart.add');

    Route::post('/increase', [App\Http\Controllers\CartController::class, 'increaseQty'])
        ->name('cart.increase');
    Route::post('/decrease', [App\Http\Controllers\CartController::class, 'decreaseQty'])
        ->name('cart.decrease');
    Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])
        ->name('cart.remove');
});
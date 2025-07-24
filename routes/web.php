<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::prefix('products')->group(function () {
    Route::get('/{product}', [App\Http\Controllers\ProductController::class, 'show'])
        ->name('products.show');
});

Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'addToCart'])
    ->name('cart.add');
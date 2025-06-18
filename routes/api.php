<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resources([
    'products' => \App\Http\Controllers\ProductController::class
]);

Route::resources([
    'currencies' => \App\Http\Controllers\CurrencyController::class
]);

Route::resources([
    'productPrices' => \App\Http\Controllers\ProductPriceController::class
]);

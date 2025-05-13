<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Ini adalah halaman about';
});

Route::get('/products', [ProductController::class, 'index']);

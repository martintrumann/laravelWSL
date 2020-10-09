<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome', ["name" => "Martin"]);
});

Route::get('/books', [BookController::class, "table"]);

Route::get('/book/{book}', [BookController::class, "index"]);

Route::get('/orders', [OrderController::class, "index"]);


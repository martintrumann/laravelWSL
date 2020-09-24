<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome', ["name" => "Martin"]);
});

Route::get('/table', [BookController::class, "table"]);

Route::get('/book', [BookController::class, "index"]);

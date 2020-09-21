<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome', ["name" => "Martin"]);
});

Route::get('/table', [BookController::class, "index"]);

<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    // return 'Hello';
    return view('welcome');
});

// ---return using controller---
Route::get('about', [HomeController::class, 'index']);
Route::get('contact', [ContactController::class, 'contact']);

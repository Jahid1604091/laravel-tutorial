<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    // return 'Hello';
    return view('welcome');
});

// ---return using controller---
Route::get('about', [HomeController::class, 'index']);
Route::get('contact', [ContactController::class, 'contact']);
Route::get('create-user', [UserController::class, 'create']);
Route::get('users', [UserController::class, 'allData']);
Route::get('users/{user_id}', [UserController::class, 'singleData']);
Route::get('users/{user_id}/delete', [UserController::class, 'deleteData']);
Route::get('users/{user_id}/update', [UserController::class, 'updateData']);

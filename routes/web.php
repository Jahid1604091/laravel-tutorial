<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    // return 'Hello';
    return view('welcome');
});

Route::view('/view-user','users.user');

// ---return using controller---
//sticky route should be placed top 
//like , users/crete then users/{id}

Route::get('about', [HomeController::class, 'index']);
Route::get('contact', [ContactController::class, 'contact']);
Route::get('token', [UserController::class, 'showToken']);
Route::get('cookie', [UserController::class, 'getCookie']);
Route::get('create-user', [UserController::class, 'create']);
Route::get('users', [UserController::class, 'allData'])->name('user_list');
Route::get('users/{user_id}', 
[UserController::class, 'singleData'])->where('user_id','[0-9]+');
Route::get('users/{user_id}/delete', [UserController::class, 'deleteData']);
Route::get('users/{user_id}/update', [UserController::class, 'updateData']);
Route::get('users/{id?}/{email?}', [UserController::class, 'showData']);


Route::get('add-user', [UserController::class, 'addUser']);
Route::post('user', [UserController::class, 'user']);

Route::get('edit-user', [UserController::class, 'editUser']);
Route::put('user', [UserController::class, 'userEdited']);

Route::get('edit-name', [UserController::class, 'editName']);
Route::patch('user', [UserController::class, 'nameEdited']);

Route::get('delete-user', [UserController::class, 'deleteUser']);
Route::delete('user', [UserController::class, 'userDeleted']);

Route::any('any-method', function(){
    return "Any method can be passed";
});

Route::redirect('test','users');

//grouping
Route::prefix('admin')->group(function(){
    Route::get('add',function(){
        return "New Admin added";
    });
    Route::get('delete',function(){
        return "Admin deleted";
    });
});
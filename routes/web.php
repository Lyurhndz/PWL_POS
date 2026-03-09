<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/add', [UserController::class, 'add']);
Route::post('/user/add_save', [UserController::class, 'add_save']);
Route::get('/user/change/{id}', [UserController::class, 'change']);
Route::put('/user/change_save/{id}', [UserController::class, 'change_save']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);
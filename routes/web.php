<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReadmoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/category', [CategoryController::class, 'category']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/readmore', [ReadmoreController::class, 'read']);

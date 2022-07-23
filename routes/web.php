<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [HomeController::class,'index'])->name('home');

Route::resource('users', UserController::class);

Route::resource('categories', CategoryController::class);

Route::resource('products', ProductController::class);

Route::resource('/cart', CartController::class);

Route::resource('login', LoginController::class);





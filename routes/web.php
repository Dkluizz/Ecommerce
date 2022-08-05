<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/',  [HomeController::class,'index'])->name('home');

Route::resource('users', UserController::class)->middleware('auth');

Route::resource('categories', CategoryController::class);

Route::resource('products', ProductController::class,['only'=>['create','edit', 'destroy','store']])->Middleware('auth');

Route::resource('products', ProductController::class, ['only'=>'show']);

Route::resource('/cart', CartController::class,['except'=> ['edit', 'show']])->middleware('auth');

Route::delete('/cart', [CartController::class, 'clear'])->name('cart.clear');










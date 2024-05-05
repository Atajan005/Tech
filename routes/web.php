<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)
    ->group(function (){
        Route::get('', 'index')->name('home');
    });

Route::controller(ProductController::class)
    ->group(function (){
        Route::get('/product/{id}', 'show')->name('product')->where('id', '[0-9]+');
    });
Route::controller(CategoryController::class)
    ->group(function (){
        Route::get('/category/{id}', 'index')->name('category')->where('id', '[0-9]+');
    });
Route::controller(BrandController::class)
    ->group(function (){
        Route::get('/brand/{id}', 'index')->name('brand')->where('id', '[0-9]+');
    });

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ProductController;

Route::get('/',[IndexController::class, 'index']);

// CATEGORIES
Route::post('/category/store',[CategoryController::class, 'store']);
Route::get('/category/{id}/{category}',[CategoryController::class, 'index']);
// SIZES
Route::post('/size/store/{category_id}',[SizeController::class, 'store']);

//PRODUCTS
Route::get('product/create/{category}', [ProductController::class, 'create']);
Route::post('product/store',[ProductController::class, 'store']);
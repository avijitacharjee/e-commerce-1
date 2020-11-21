<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('signin');
});

Route::get('sign-up', function () {
    return view('signup');
});
Route::post('sign-up',[AuthController::class, 'signUp']);
Route::post('sign-in',[AuthController::class, 'signIn']);
Route::get('users',[UserController::class,'users']);
Route::get('user-update/{id}',[UserController::class,'userUpdate']);
Route::post('user-update/{id}',[UserController::class,'userUpdatePost']);
Route::get('user-delete/{id}',[UserController::class,'userDelete']);

Route::get('products',[ProductController::class,'products']);
Route::get('products/insert',[ProductController::class,'insert_get']);
Route::post('products/insert',[ProductController::class,'insert']);
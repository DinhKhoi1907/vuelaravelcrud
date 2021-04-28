<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post/create', \App\Http\Controllers\PostController::class  . '@store');
Route::get('/post/edit/{id}', \App\Http\Controllers\PostController::class . '@edit');
Route::post('/post/update/{id}', \App\Http\Controllers\PostController::class . '@update');
Route::delete('/post/delete/{id}', \App\Http\Controllers\PostController::class . '@delete');
Route::get('/posts', \App\Http\Controllers\PostController::class . '@index');

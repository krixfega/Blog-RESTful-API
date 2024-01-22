<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogPostController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('jwt.auth')->group(function () {
    // Blog Post Routes
    Route::post('/blog-posts', 'App\Http\Controllers\BlogPostController@store');
    Route::get('/blog-posts', 'App\Http\Controllers\BlogPostController@index');
    Route::get('/blog-posts/{id}', 'App\Http\Controllers\BlogPostController@show');
    Route::put('/blog-posts/{id}', 'App\Http\Controllers\BlogPostController@update');
    Route::delete('/blog-posts/{id}', 'App\Http\Controllers\BlogPostController@destroy');
});


// User Authentication Routes
Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@login');


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    Route::post('/blog-posts', 'BlogPostController@store');
    Route::get('/blog-posts', 'BlogPostController@index');
    Route::get('/blog-posts/{id}', 'BlogPostController@show');
    Route::put('/blog-posts/{id}', 'BlogPostController@update');
    Route::delete('/blog-posts/{id}', 'BlogPostController@destroy');
});


// User Authentication Routes
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');


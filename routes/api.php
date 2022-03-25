<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('posts', 'ApiController');
Route::get('posts', 'ApiController@getAllPosts');
Route::get('posts/{slug}', 'ApiController@getPost');
Route::post('posts', 'ApiController@createPost');
Route::put('posts/{slug}', 'ApiController@updatePost');
Route::delete('posts/{slug}','ApiController@deletePost');

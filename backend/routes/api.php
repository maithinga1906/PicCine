<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;

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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::post('/register','Api\UserController@register');

/** POSTS */
Route::get('/show-posts', [PostController::class,'show']);
Route::post('/posts', [PostController::class,'post']);
Route::patch('update-post/{posts}/', [PostController::class,'update']);
Route::post('/upload-file', [PostController::class,'uploadFile']);
Route::get('/delete-posts/{post}', [PostController::class,'destroy']);

/** BOOKING*/



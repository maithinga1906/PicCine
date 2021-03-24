<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;

use app\Http\Controllers\Api\BookingController;

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


// 
Route::post('/register','Api\UserController@register');
Route::post('/login','Api\UserController@login');
Route::get('/info','Api\UserController@userInfo')->middleware('auth:api');

/** POSTS */
// Route::get('/show-posts', [PostController::class,'show']);
// Route::post('/add-post', [PostController::class,'post']);
// Route::patch('update-post/{posts}/', [PostController::class,'update']);
// Route::post('/upload-file', [PostController::class,'uploadFile']);
// Route::get('/delete-post/{post}', [PostController::class,'destroy']);

//Posts
Route::get('/find-booking/{id}','Api\BookingController@show');


Route::post('/booking', 'Api\BookingController@store');//->middleware('auth:api');

/**CATEGORIES */
// Route::get('/show-styles', [StyleController::class,'show']);
// Route::post('/add-style', [StyleController::class,'store']);
// Route::patch('update-style/{styles}/', [StyleController::class,'update']);
// Route::get('/delete-style/{styles}', [StyleController::class,'destroy']);


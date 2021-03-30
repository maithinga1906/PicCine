<?php

use Illuminate\Http\Reques;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\StyleController;

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


//Posts
Route::get('booking/index','Api\BookingController@index')->middleware('auth:api');
Route::get('/booking/show/{id}','Api\BookingController@show')->middleware('auth:api');
Route::post('/booking/store', 'Api\BookingController@store')->middleware('auth:api');
Route::patch('/booking/update/{id}','Api\BookingController@update')->middleware('auth:api');
Route::delete('booking/destroy/{id}','Api\BookingController@destroy');





/** POSTS */
Route::get('/show-posts', [PostController::class,'show']);
Route::post('/add-post', [PostController::class,'post']);
Route::patch('update-post/{posts}/', [PostController::class,'update']);
Route::post('/upload-file', [PostController::class,'uploadFile']);
Route::get('/delete-post/{post}', [PostController::class,'destroy']);
// search
Route::post('/home/search', [PostController::class,'search']);

/** BOOKING*/
Route::post('/booking', [BookingController::class,'booking']);

/**CATEGORIES */
Route::get('/show-styles', [StyleController::class,'show']);
Route::post('/add-style', [StyleController::class,'store']);
Route::patch('update-style/{styles}/', [StyleController::class,'update']);
Route::get('/delete-style/{styles}', [StyleController::class,'destroy']);

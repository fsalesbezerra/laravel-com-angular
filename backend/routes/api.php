<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('auth/login', 'Api\\AuthController@login');
Route::post('auth/register', 'Api\\UserController@store');

Route::group(['middleware' => ['apiJwt']], function(){

    Route::get('user-profile', 'Api\\UserController@profile');
    Route::post('auth/logout', 'Api\\AuthController@logout');

    Route::get('users', 'Api\\UserController@index');
});

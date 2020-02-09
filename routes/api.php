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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth'
    ], function () {
        Route::post('login', 'AuthController@login');
        Route::post('signup/user', 'AuthController@signup');
        Route::post('signup/admin', 'AuthController@register');
    
        Route::group([
        'middleware' => 'auth:api'
        ], function() {
            Route::get('logout', 'AuthController@logout');
            Route::get('user', 'AuthController@user');
        });
});

Route::get('/profile','ProfileController@index');
Route::get('/profile/{id}','ProfileController@show');
Route::post('/profile/store','ProfileController@store');
Route::post('/profile/update/{id}','ProfileController@update');
Route::post('/profile/delete/{id}','ProfileController@destroy');

Route::get('/diari','DiariController@index');
Route::get('/diari/{id}','DiariController@show');
Route::post('/diari/store','DiariController@store');
Route::post('/diari/update/{id}','DiariController@update');
Route::post('/diari/delete/{id}','DiariController@destroy');

Route::post('/keluarga/store','KeluargaController@store');






// Route::post('register', 'Auth\RegisterController@register');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout');
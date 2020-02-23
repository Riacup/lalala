<?php

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
    return view('welcome');
});

Route::get('/', function () {
    return view('base/home_page');
});

Route::get('/home', 'HomeController@index')->name('home');
//Halaman utama atau landing
Route::get('/landing', 'BaseController@index');

//Halaman login
Auth::routes();

//Halaman dashboard
Route::get('/admin', 'GrafikController@index');
Route::get('/monthly-ajax/{date?}', 'GrafikController@monthlyAjax')->name('monthly-ajax'); 
Route::get('/monthly-data/{date?}', 'GrafiksController@getMonthly')->name('monthly-trans'); 

//Halaman data pengguna
Route::resource('/pengguna', 'PenggunaController');

//Halaman data keluarga
Route::resource('/keluarga', 'DataKeluargaController');

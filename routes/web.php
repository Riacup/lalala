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

//Route::get('/home', 'HomeController@index')->name('home');
//Halaman utama atau landing
Route::get('/landing', 'BaseController@index');

//Halaman login
Auth::routes();

//Halaman dashboard
Route::get('/admin', 'AdminController@index');
Route::get('/user_register', 'AdminController@user_register')->name('user_register');

Route::get('/changePassword', function(){
    return view('dashboard_admin/changePassword');
});

Route::post('/change-password', 'ChangePasswordController@store')->name('change.password');

Route::get('/profileAdmin', 'AdminController@data'); 

Route::get('/profilPengguna/{id}', 'PenggunaController@profilPengguna')->name('profilPengguna'); 

//Halaman data pengguna
Route::resource('/pengguna', 'PenggunaController');

//Halaman data keluarga
Route::resource('/keluarga', 'DataKeluargaController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

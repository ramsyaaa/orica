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
    return view('auth.login');
});
Route::get('/auth/login', 'Auth\AuthController@loginPage')->name('loginPage');
Route::post('/auth/login', 'Auth\AuthController@loginUser')->name('loginUser');

Auth::routes();
Route::get('/logout', 'Auth\AuthController@logout')->name('logoutUser');


Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/location', 'Admin\\LocationController');
Route::resource('admin/asset', 'Admin\\AssetController');
Route::resource('admin/asset-history', 'Admin\\AssetHistoryController');
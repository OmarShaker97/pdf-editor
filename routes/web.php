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
Route::get('userinfo/viewgeneratepdf', 'UserInformationController@viewgeneratepdf');

Route::post('userinfo/generatepdf', 'UserInformationController@generatepdf');

Route::resource('userinfo', 'UserInformationController');

Route::get('/', function () {
    return view('welcome');
});

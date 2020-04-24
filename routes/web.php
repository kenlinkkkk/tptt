<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/back', 'Home\HomeController@redirectUrl')->name('backHome');
Route::middleware('check_phone')->group(function () {
    Route::get('/', 'Home\HomeController@index')->name('index');

    Route::post('/register', 'Home\HomeController@registerPackage')->name('register');
});

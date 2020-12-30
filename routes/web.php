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

Route::get('/', 'FrontendController@main')->name('mainpage');
Route::get('videodetail/{id}', 'FrontendController@videodetail')->name('videodetail');
Route::get('video', 'FrontendController@video')->name('videopage');


Route::resource('musics','MusicController');
Route::resource('videos','VideoController');
Route::resource('blogs','BlogController');
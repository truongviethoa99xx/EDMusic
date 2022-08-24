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

Route::get('/', function () {
    return view('welcome');
});


/**
 * Trans: Home
 */
Route::namespace('Home')->group(function () {
    Route::get("home", "HomeController@index");
});

/**
 * Trans: Listen music
 */
Route::namespace('Listen_music')->group(function () {
    Route::get("listen", "ListenMusicController@index");
});

/**
 * Trans: Login
 */
Route::namespace('Login')->group(function () {
    Route::get("login", "LoginController@index");
});
/**
 * Trans: News
 */
Route::namespace('News')->group(function () {
    Route::get("news", "NewsController@index");
});
/**
 * Trans: Upload audio
 */
Route::namespace('Upload_audio')->group(function () {
    Route::get("upload", "UploadAudioController@index");
});
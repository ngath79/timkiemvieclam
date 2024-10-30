<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
Route::get('/', 'User\UserController@home_page')->name('user.pages.home');
Route::get('/home', 'User\UserController@home_page')->name('user.pages.home');



Route::get('/', function () {
    return view('welcome');
});

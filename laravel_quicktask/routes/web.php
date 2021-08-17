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

Route::group(['middleware' => 'locale'], function() {
    
    Auth::routes();
    Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

    Route::resource('cards', 'CardController')->except([
        'index',
    ]);

    Route::get('profile/{id}', 'HomeController@profile')->name('profile')->middleware('auth');
    Route::put('profile/{id}', 'HomeController@updateProfile');
});

Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('change-language');

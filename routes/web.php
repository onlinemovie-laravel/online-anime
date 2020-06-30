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
// test giao dien
Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('menbers.index');
})->name('index');

Route::get('infor', function () {
    return view('flim.infor');
})->name('fliminfor');

Route::get('cate', function () {
    return view('flim.category');
})->name('cate');

Route::get('play', function () {
    return view('flim.player');
})->name('play');

/// end test
Route::prefix('admin')->name('admin.')->group(function () { 
    Route::prefix('user')->name('user.')->group(function () { 
        Route::get('index','UserController@index')->name('index');

        Route::get('register','UserController@create')->name('register'); 
        Route::post('store','UserController@store')->name('store');  

        Route::get('edit/{id}','UserController@edit')->name('edit');
        Route::post('update/{id}','UserController@update')->name('update'); 

        Route::get('destroy/{id}','UserController@destroy')->name('destroy');
    });
    Route::prefix('anime')->name('anime.')->group(function () { 
        Route::get('index','AnimeController@index')->name('index');

        Route::get('register','AnimeController@create')->name('register'); 
        Route::post('store','AnimeController@store')->name('store');  

        Route::get('edit/{id}','AnimeController@edit')->name('edit');
        Route::post('update/{id}','AnimeController@update')->name('update'); 

        Route::get('destroy/{id}','AnimeController@destroy')->name('destroy');
    });
});
// login-logout
Auth::routes();
Auth::routes(['verify' => true]);
 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@home')->name('admin');

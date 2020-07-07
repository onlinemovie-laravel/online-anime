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
    Route::prefix('category')->name('category.')->group(function () { 
        Route::get('index','CategoryController@index')->name('index');

        Route::get('create','CategoryController@create')->name('create'); 
        Route::post('store','CategoryController@store')->name('store');  

        Route::get('edit/{id}','CategoryController@edit')->name('edit');
        Route::post('update/{id}','CategoryController@update')->name('update'); 

        Route::get('destroy/{id}','Categorycontroller@destroy')->name('destroy');
    });
    Route::prefix('flim')->name('flim.')->group(function () { 
        Route::get('index','FlimController@index')->name('index');

        Route::get('create','FlimController@create')->name('create'); 
        Route::post('store','FlimController@store')->name('store');  

        Route::get('edit/{id}','FlimController@edit')->name('edit');
        Route::post('update/{id}','FlimController@update')->name('update'); 

        Route::get('destroy/{id}','FlimController@destroy')->name('destroy');
    });
});
// login-logout
Auth::routes();
Auth::routes(['verify' => true]);
 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@home')->name('admin');

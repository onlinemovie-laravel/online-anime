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
Route::get('/','FlimController@show')->name('index');



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

<<<<<<< HEAD
        Route::get('home','FlimController@show')->name('home'); 
        Route::post('more','FlimController@more')->name('more');  

=======
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
        Route::get('create','FlimController@create')->name('create'); 
        Route::post('store','FlimController@store')->name('store');  

        Route::get('edit/{id}','FlimController@edit')->name('edit');
        Route::post('update/{id}','FlimController@update')->name('update'); 

        Route::get('destroy/{id}','FlimController@destroy')->name('destroy');
    });
<<<<<<< HEAD
    Route::prefix('chapter')->name('chapter.')->group(function () { 
        Route::get('index','ChapterController@index')->name('index');

        Route::get('create','ChapterController@create')->name('create'); 
        Route::post('store','ChapterController@store')->name('store');  

        Route::get('edit/{id}','ChapterController@edit')->name('edit');
        Route::post('update/{id}','ChapterController@update')->name('update'); 

        Route::get('destroy/{id}','ChapterController@destroy')->name('destroy');
    });
=======
>>>>>>> 96434f47a37b40b9759c32bacd079834da6c24bd
});
Route::prefix('page')->name('page.')->group(function () { 
    Route::get('flim/{id}','PageController@inforpage')->name('inforpage');

    Route::get('category/{name}','PageController@pagecate')->name('pagecate'); 
    Route::get('year/{year}','PageController@yearpage')->name('yearpage');
    Route::post('store','PageController@store')->name('store');  

    Route::get('edit/{id}','PageController@edit')->name('edit');
    Route::post('update/{id}','PageController@update')->name('update'); 

    Route::get('destroy/{id}','PageController@destroy')->name('destroy');
});

// login-logout
Auth::routes();
Auth::routes(['verify' => true]);
 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@home')->name('admin');

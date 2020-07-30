<?php

use App\Http\Controllers\BoxflimController;
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
Route::get('/','FlimController@show')->name('index');

Route::middleware('checkadmin')->prefix('admin')->name('admin.')->group(function () { 
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

        Route::get('destroy/{id}','CategoryController@destroy')->name('destroy');
    });
    Route::prefix('flim')->name('flim.')->group(function () { 
        Route::get('index','FlimController@index')->name('index');

        Route::get('home','FlimController@show')->name('home'); 
        Route::post('more','FlimController@more')->name('more');  

        Route::get('create','FlimController@create')->name('create'); 
        Route::post('store','FlimController@store')->name('store');  

        Route::get('edit/{id}','FlimController@edit')->name('edit');
        Route::post('update/{id}','FlimController@update')->name('update'); 

        Route::get('destroy/{id}','FlimController@destroy')->name('destroy');
    });
    Route::prefix('chapter')->name('chapter.')->group(function () { 
        Route::get('index','ChapterController@index')->name('index');

        Route::get('create','ChapterController@create')->name('create'); 
        Route::post('store','ChapterController@store')->name('store');  

        Route::get('edit/{id}','ChapterController@edit')->name('edit');
        Route::post('update/{id}','ChapterController@update')->name('update'); 

        Route::get('destroy/{id}','ChapterController@destroy')->name('destroy');
    });
});
Route::prefix('page')->name('page.')->group(function () { 
    Route::get('flim/{id}','PageController@inforpage')->name('inforpage');
    Route::get('all','PageController@show')->name('show');
    Route::get('category/{name}','PageController@pagecate')->name('pagecate'); 
    Route::get('year/{year}','PageController@yearpage')->name('yearpage');
    Route::get('status/{status}','PageController@statuspage')->name('statuspage'); 

    Route::get('video/{id}','PageController@videopage')->name('videopage');
    Route::post('update/{id}','PageController@update')->name('update'); 

    Route::get('destroy/{id}','PageController@destroy')->name('destroy');

});
Route::prefix('user')->name('user.')->group(function () { 
    
    Route::get('index/{id}','BoxflimController@show')->name('boxindex');
    Route::post('delete/{id}','BoxflimController@destroy')->name('boxdelete');
    Route::post('add', 'BoxflimController@store')->name('boxadd');



});
Route::fallback(function () {
    return view('404');
});
// login-logout
Auth::routes();
Auth::routes(['verify' => true]);
 
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@home')->name('admin')->middleware('checkadmin');

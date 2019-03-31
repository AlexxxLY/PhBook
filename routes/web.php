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

Route::get('/','IndexController@show'); 
// {
//     // //return view('welcome');
//     // return view('default.index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix("/")->middleware(['auth'])->group( function () {

    //Route::get('/', 'MainController@list')->name('main');
    Route::get('/add', 'MainController@add');
    Route::post('/add', 'MainController@add')->name('main-add');
    // Route::get('/edit/{id}', 'MainController@add')->name('news-edit');
    // Route::post('/edit/{id}', 'MainController@add')->name('news-update');
   // Route::get('/delete','{id}', 'MainController@delete')->name('main-delete');
});


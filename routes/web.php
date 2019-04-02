<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/','IndexController@show')->name('main');

Route::get('/', 'MainController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix("/")->middleware(['auth'])->group(function () {

    Route::get('/search', 'MainController@search')->name('search');
    Route::get('/add', 'MainController@add')->name('add');
    Route::get('/create', 'MainController@create');
    Route::post('/create', 'MainController@create')->name('create');
    Route::get('/delete/{id}', 'MainController@delete')->name('delete');
});

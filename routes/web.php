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

Route::get('/', function () {
    return view('landing.home');
});

Route::post('/ticket/store', 'TicketController@store');
Route::get('/ticket/delete/{ticket}', 'TicketController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/user/{user}', 'HomeController@show');
Route::post('/home/user/store', 'HomeController@store');

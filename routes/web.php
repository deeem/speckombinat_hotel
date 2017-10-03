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

    // example: $getLocale(Request::server('HTTP_ACCEPT_LANGUAGE'));
    $getLocale = function ($string) {
        $parts = explode(';', $string);
        $locales = explode(',', $parts[0]);

        if (in_array('uk', $locales)) {
            return 'uk';
        } else if (in_array('ru', $locales)) {
            return 'ru';
        }

        return 'en';
    };

    return view('landing.home');
});

Route::post('/ticket/store', 'TicketController@store');
Route::get('/ticket/delete/{ticket}', 'TicketController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/user/{user}', 'HomeController@show');
Route::post('/home/user/store', 'HomeController@store');
Route::get('/home/user/delete/{user}', 'HomeController@delete');

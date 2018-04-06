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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

//API
Route::get('fortnite/wins/{id}', 'APIController@contadorFortniteWins');


//Fortnite
Route::get('/dashboard/fortnite', 'FortniteController@index');
Route::post('/dashboard/fortnite/comenzarContadorWins', 'FortniteController@comenzarContadorWins');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

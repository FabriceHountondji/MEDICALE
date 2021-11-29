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

// PORTE ENTREE

Route::get('/', function () {
    return view('index');
});

// FIN PORTE ENTREE


// LOGIN ET DECONNEXION

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate')->name('authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LogoutController@logout')->name('logout');

// FIN LOGIN ET DECONNEXION

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
    return redirect()->route('principalQuiniela');
});

Route::get('', 'QuinielaController@indexPrincipal')->name('principalQuiniela');

//usuario
Route::post('quiniela', 'QuinielaController@quiniela')->name('quiniela');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('perfil', 'QuinielaController@perfil')->name('perfil');

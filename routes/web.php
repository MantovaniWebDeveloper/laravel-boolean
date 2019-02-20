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

Route::get('/', 'indexController@index')->name('home');
Route::get('/studenti', 'pagineInterne@studenti')->name('studenti-boolean');
Route::get('studenti/{slug}', 'studenteControl@studenteSingolo')->name('studenti.show');;
Route::get('/corso', 'pagineInterne@corso')->name('corso-boolean');
Route::get('/medoto', 'pagineInterne@metodo')->name('metodo-boolean');
Route::get('/dopoIlCorso', 'pagineInterne@dopoIlCorso')->name('dopo-il-corso');
Route::get('/faq', 'pagineInterne@faq')->name('faq-boolean');

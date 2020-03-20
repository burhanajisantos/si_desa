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
    return view('/penduduk/home');
});

Route::get('/penduduk/home','HomeController@index');
Route::get('/penduduk','PendudukController@index');
Route::post('/penduduk/create','PendudukController@create');
Route::get('/penduduk/{id}/edit','PendudukController@edit');
Route::post('/penduduk/{id}/update','PendudukController@update');
Route::get('/penduduk/{id}/delete','PendudukController@delete');
Route::get('/pegawai','PegawaiController@index');
Route::post('/pegawai/create','PegawaiController@create');
Route::get('/pegawai/{id}/edit','PegawaiController@edit');
Route::post('/pegawai/{id}/update','PegawaiController@update');
Route::get('/pegawai/{id}/delete','PegawaiController@delete');
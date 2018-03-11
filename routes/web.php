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
    return view('welcome');
});
Route::resource('home','hucontroler');
Route::resource('tambahdatasiswa','datasiswa');
Route::resource('wali','datawali');
Route::resource('matkul','datamatkul');
Route::resource('raport','dataraport');
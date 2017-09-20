<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|ss
*/


Route::get('/', 'ViewController@index');

Route::get('/belajar2', function () {
    return view('belajar2');
});

Route::get('/tambah', 'ViewController@create');

Route::get('/ubah', 'ViewController@update');

Route::get('/tampil', 'ViewController@show');

Route::get('/hapus', 'ViewController@delete');




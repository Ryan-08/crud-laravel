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

Route::get('/', function () {
    return redirect('/beranda');
});

Route::get('/beranda', 'WebController@home');
Route::get('/tambah', 'WebController@menuTambah');
Route::get('/edit/id={id}', 'WebController@menuEdit');

Route::post('/tambah/proses', 'crudController@insertData');
Route::post('/edit/id={id}', 'crudController@editData')->name('edit');
Route::post('/hapus/id={id}', 'crudController@deleteData');
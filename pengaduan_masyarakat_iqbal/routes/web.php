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
    return view('welcome');
});
 //PENGADUAN
Route::get('/pengaduan', 'PengaduanController@index');
Route::get('pengaduan/create', 'PengaduanController@create');
Route::post('pengaduan/store', 'PengaduanController@store');
Route::put('pengaduan/update/{id_pengaduan}', 'PengaduanController@update');
Route::get('pengaduan/destroy/{id_pengaduan}', 'PengaduanController@destroy');
Route::get('pengaduan/edit/{id_pengaduan}', 'PengaduanController@edit');
//Route::get('pengaduan/detail/{id_pengaduan}', 'PengaduanController@detail');
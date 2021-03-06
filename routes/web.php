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

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tug4pweb');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');


Route::get('ets', 'ViewController@showEts');

Route::get('fibo', 'ViewController@showForm');
Route::post('hasil', 'ViewController@hasilHitung');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD tugas
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD bus
Route::get('/bus','BusController@index');
Route::get('/bus/tambah','BusController@tambah');
Route::post('/bus/store','BusController@store');
Route::get('/bus/edit/{id}','BusController@edit');
Route::post('/bus/update','BusController@update');
Route::get('/bus/hapus/{id}','BusController@hapus');
Route::get('/bus/cari','BusController@cari');
Route::get('/bus/detail/{id}','BusController@view');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','NilaikuliahController@index');
Route::get('/nilaikuliah/tambah','NilaikuliahController@tambah');
Route::post('/nilaikuliah/store','NilaikuliahController@store');
Route::get('/nilaikuliah/hapus/{id}','NilaikuliahController@hapus');

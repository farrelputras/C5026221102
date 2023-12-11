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

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('resp', function () {
    return view('responsive');
});

Route::get('style', function () {
    return view('style');
});

Route::get('tugas1', function () {
    return view('tugas1');
});

Route::get('tugas2-card-columns', function () {
    return view('tugas2a');
});

Route::get('tugas2-card-deck', function () {
    return view('tugas2b');
});

Route::get('tugas2-card-images', function () {
    return view('tugas2c');
});

Route::get('tugas2-card-contextual', function () {
    return view('tugas2d');
});

Route::get('tugas3', function () {
    return view('tugas3');
});

Route::get('tes', function(){
    return view('blog');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showTime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD latsoal15
Route::get('/latsoal15','App\Http\Controllers\LatSoal15Controller@index');
Route::get('/latsoal15/latsoal15_tambah','App\Http\Controllers\LatSoal15Controller@tambah');
Route::post('/latsoal15/latsoal15_store','App\Http\Controllers\Latsoal15Controller@store');

//route CRUD hewan
Route::get('/hewan','App\Http\Controllers\HewanController@index');
Route::get('/hewan/tambah','App\Http\Controllers\HewanController@tambah');
Route::post('/hewan/store','App\Http\Controllers\HewanController@store');
Route::get('/hewan/edit/{kode}','App\Http\Controllers\HewanController@edit');
Route::post('/hewan/update','App\Http\Controllers\HewanController@update');
Route::get('/hewan/hapus/{kode}','App\Http\Controllers\HewanController@hapus');
Route::get('/hewan/cari','App\Http\Controllers\HewanController@cari');
Route::get('/hewan/view/{kode}','App\Http\Controllers\HewanController@view');

//route CRUD karyawan
Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\KaryawanController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\KaryawanController@hapus');

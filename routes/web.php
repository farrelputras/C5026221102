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

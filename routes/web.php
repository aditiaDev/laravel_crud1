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
    return view('contents.home');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::post('/pertanyaan', 'PertanyaanController@create');
Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{id}/getData', 'PertanyaanController@getData_by_id');
Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@delete');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@create');

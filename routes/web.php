<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;

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
    return redirect('/barang');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/barang', 'BarangController@index');

Route::get('/barang/tambah', 'BarangController@tambah');

Route::post('/barang/store', 'BarangController@store');

Route::get('/barang/edit/{id}', 'BarangController@edit');

Route::put('/barang/update/{id}', 'BarangController@update');

Route::get('/barang/hapus/{id}', 'BarangController@delete');

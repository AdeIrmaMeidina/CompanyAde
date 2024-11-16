<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('home');

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('organigram', App\Http\Controllers\OrganigramController::class);
Route::resource('berita', App\Http\Controllers\BeritaController::class);
Route::resource('tentang', App\Http\Controllers\TentangController::class);
Route::resource('kontak', App\Http\Controllers\KontakController::class);
Route::resource('servis', App\Http\Controllers\ServisController::class);
Route::resource('sparepart', App\Http\Controllers\SparepartController::class);



<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('home');

});
Route::get('about', function () {
    return view('about');

});

Route::get('services', function () {
    return view('services');

});

Route::get('team', function () {
    return view('team');

});
Route::get('testimonial', function () {
    return view('testimonial');

});
Route::get('contact', function () {
    return view('contact');

});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });


Route::resource('organigram', App\Http\Controllers\OrganigramController::class);
Route::resource('berita', App\Http\Controllers\BeritaController::class);
Route::resource('tentang', App\Http\Controllers\TentangController::class);
Route::resource('kontak', App\Http\Controllers\KontakController::class);
Route::resource('servis', App\Http\Controllers\ServisController::class);
Route::resource('sparepart', App\Http\Controllers\SparepartController::class);});



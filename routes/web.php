<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', 'HomeController@index');
// Route::get('/', 'HomeController@indexHumas');
Route::get('index','IndexController@index');
Route::get('artikel','ArtikelController@index');
Route::get('guru','GuruController@index');
Route::get('humas','KegiatanController@index');
Route::get('kurikulum','JadwalController@index');

Route::middleware('auth')->group(function(){
    Route::get('adminGuru','GuruController@indexGuru');
    Route::get('guru/create','GuruController@create');
    Route::post('guru/store','GuruController@store');
    Route::get('guru/{guru:slug}/edit','GuruController@edit');
    Route::patch('guru/{guru:slug}/edit','GuruController@update');
    Route::delete('guru/{guru:slug}/delete','GuruController@destroy');

    Route::get('adminHumas','KegiatanController@indexHumas');
    Route::get('humas/create','KegiatanController@create');
    Route::post('humas/store','KegiatanController@store');
    Route::get('humas/{humas:slug}/edit','KegiatanController@edit');
    Route::patch('humas/{humas:slug}/edit','KegiatanController@update');
    Route::delete('humas/{humas:slug}/delete','KegiatanController@destroy');

    Route::get('admin','AdminController@index');
    Route::get('admin/create','AdminController@create');
    Route::post('admin/store','AdminController@store');
    Route::get('admin/{artikel:slug}/edit','AdminController@edit');
    Route::patch('admin/{artikel:slug}/edit','AdminController@update');
    Route::delete('admin/{artikel:slug}/delete','AdminController@destroy');

    Route::get('adminKurikulum','JadwalController@indexJadwal');
    Route::get('jadwal/create','JadwalController@create');
    Route::post('jadwal/store','JadwalController@store');
    Route::get('jadwal/{jadwal:jadwal}/edit','JadwalController@edit');
    Route::patch('jadwal/{jadwal:jadwal}/edit','JadwalController@update');
    Route::delete('jadwal/{jadwal:jadwal}/delete','JadwalController@destroy');

});


Route::get('posts/{artikel:title}','ArtikelController@show');
Route::get('humas/kegiatan','KegiatanController@kegiatan');

Route::view('visi','visi');

Route::view('login','login');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

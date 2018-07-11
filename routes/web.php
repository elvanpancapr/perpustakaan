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
/*
Route::group(['middleware' => 'web'], function(){
    //redirect to login
    Route::auth();
});

Route::group(['middleware' => ['web','auth']], function(){
    //redirect to login
    Route::get('/', function(){
      if(Auth::user()->akses==0){
        return view('');
      }elseif(Auth::user()->akses==1){
        return view('');
      }elseif(Auth::user()->akses==2){
        return view('');
      }
    });
});
*/
Route::resource('/', 'HomepageController');
Route::get('about', 'AboutController@index');
Route::get('login', 'AboutController@login');
Route::get('header', 'AboutController@header');
Route::get('index', 'MenuController@index');
Route::get('transaksi', 'MenuController@transaksi');
Route::get('anggota', 'MenuController@anggota');
Route::get('buku', 'MenuController@buku');
Route::get('referensi', 'MenuController@referensi');
Route::get('konfigurasi', 'MenuController@konfigurasi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

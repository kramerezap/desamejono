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

Route::get('', 'BlogController@beranda');
Route::get('/profil', 'BlogController@profil');
Route::get('/profilsejarah', 'BlogController@profilsejarah');
Route::get('/profilstruktur', 'BlogController@profilstruktur');
Route::get('/profilanggaran', 'BlogController@profilanggaran');
Route::get('/potensi', 'BlogController@potensi');
Route::get('/galeri', 'BlogController@galeri');
Route::get('/kontak', 'BlogController@kontak');
Route::get('/berita', 'BlogController@berita');
Route::get('/laporlurah', 'BlogController@laporlurah');
Route::post('/laporlurahact', 'BlogController@laporlurahact');
Route::post('/insertpesan', 'BlogController@insertpesan');

//////////////////////////////////////////////////////////////
Route::get('/adminlogin', 'BlogController@adminlogin');
Route::post('/admin:loginaction', 'BlogController@adminloginaction');
/*Route::get('/admin:dashboard', 'BlogController@admindashboard');
Route::get('/admin:keluarga', 'BlogController@adminkeluarga');
Route::get('/admin:penduduk', 'BlogController@adminpenduduk');*/
Route::post('/admininsertkeluarga', 'BlogController@admininsertkeluarga');
Route::post('/admininsertpenduduk', 'BlogController@admininsertpenduduk');
Route::post('/admininsertpotensi', 'BlogController@admininsertpotensi');
Route::post('/admininsertberita', 'BlogController@admininsertberita');
Route::post('/admininsertgaleri', 'BlogController@admininsertgaleri');
Route::post('/admininsertrw', 'BlogController@admininsertrw');
Route::post('/admininsertrt', 'BlogController@admininsertrt');
Route::post('/admininsertsuratmasuk', 'BlogController@admininsertsuratmasuk');
Route::post('/admininsertsuratkeluar', 'BlogController@admininsertsuratkeluar');

Route::get('/admin:hapus={id}', 'BlogController@hapuskeluarga');
Route::get('/bacaberita={id}', 'BlogController@bacaberita');
Route::get('/admin:hapussuratmasuk={id}', 'BlogController@hapussuratmasuk');
Route::get('/admin:hapussuratkeluar={id}', 'BlogController@hapussuratkeluar');
Route::get('/admin:hapuspotensi={id}', 'BlogController@hapuspotensi');
Route::get('/admin:hapusgaleri={id}', 'BlogController@hapusgaleri');
Route::get('/admin:hapuspenduduk={id}', 'BlogController@hapuspenduduk');
Route::get('/admin:hapusrw={id}', 'BlogController@hapusrw');
Route::get('/admin:hapusberita={id}', 'BlogController@hapusberita');

Route::post('/admin:updatepotensi={id}', 'BlogController@updatepotensi');
Route::post('/admin:updateberita={id}', 'BlogController@updateberita');
Route::post('/admin:updategaleri={id}', 'BlogController@updategaleri');
Route::post('/admin:updatekeluarga={id}', 'BlogController@updatekeluarga');
Route::post('/admin:updatependuduk={id}', 'BlogController@updatependuduk');
Route::post('/admin:updatesuratmasuk={id}', 'BlogController@updatesuratmasuk');
Route::post('/admin:updatesuratkeluar={id}', 'BlogController@updatesuratkeluar');

Route::get('/adminrtrw', 'BlogController@rtrw')->name('adminrtrw');
Route::get('/admin','BlogController@admindashboard')->name('admin');
Route::get('/adminkeluarga','BlogController@adminkeluarga')->name('adminkeluarga');
Route::get('/adminsuratmasuk','BlogController@adminsuratmasuk')->name('adminsuratmasuk');

Route::get('/adminsuratkeluar','BlogController@adminsuratkeluar')->name('adminsuratkeluar');
Route::get('/adminkeuangan','BlogController@adminkeuangan')->name('adminkeuangan');
Route::get('/adminpotensi','BlogController@adminpotensi')->name('adminpotensi');
Route::get('/admingaleri','BlogController@admingaleri')->name('admingaleri');
Route::get('/adminberita','BlogController@adminberita')->name('adminberita');
Route::get('/adminpenduduk','BlogController@adminpenduduk')->name('adminpenduduk');
Route::get('/adminpesan','BlogController@adminpesan')->name('adminpesan');
Route::get('/adminlaporan','BlogController@adminlaporan')->name('adminlaporan');
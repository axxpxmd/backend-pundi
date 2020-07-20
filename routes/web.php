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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {

    // Master User
    Route::prefix('master-user')->name('master-user.')->group(function () {
        Route::get('user', 'MasterUserController@user')->name('user');
        Route::get('admin', 'MasterUserController@admin')->name('admin');
        Route::get('tambah', 'MasterUserController@tambah')->name('tambah');
        Route::post('tambah/store', 'MasterUserController@store')->name('tambah.store');
        Route::get('edit', 'MasterUserController@edit')->name('edit');
        Route::put('edit/update', 'MasterUserController@update')->name('edit.update');
        Route::get('delete', 'MasterUserController@delete')->name('delete');
    });

    // Master Article
    Route::prefix('master-artikel')->name('master-artikel.')->group(function () {
        Route::get('artikel-terverikasi', 'ArtikelController@terverifikasi')->name('tervefikasi');
        Route::get('artikel-Belumterverikasi', 'ArtikelController@belumTerverifikasi')->name('Belumtervefikasi');
        Route::get('isi-artikel', 'ArtikelController@isi')->name('isi');
        Route::put('publish-artikel', 'ArtikelController@publishArtikel')->name('isi.publishArtikel');
        Route::put('unpublish-artikel', 'ArtikelController@UnpublishArtikel')->name('isi.UnpublishArtikel');
        Route::get('edit-artikel', 'ArtikelController@editArtikel')->name('editArtikel');
        Route::put('editArtikel-update', 'ArtikelController@updateArtikel')->name('editArtikel.update');
        Route::get('delete', 'ArtikelController@delete')->name('delete');
    });

    // Master Gambar
    // Route::prefix('gambar')->name('gambar.')->group(function () {
    //     Route::get('header', 'GambarController@index');
    // });
});

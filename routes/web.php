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
        // User
        Route::get('user', 'MasterUserController@user')->name('user');
        // Admin
        Route::get('admin', 'MasterUserController@admin')->name('admin');
        // Tambah Data
        Route::get('tambah', 'MasterUserController@tambah')->name('tambah');
        Route::post('tambah/store', 'MasterUserController@store')->name('tambah.store');
        // Edit Data
        Route::get('edit', 'MasterUserController@edit')->name('edit');
        Route::put('edit/update', 'MasterUserController@update')->name('edit.update');
        // Delete Data
        Route::get('delete', 'MasterUserController@delete')->name('delete');
    });
});

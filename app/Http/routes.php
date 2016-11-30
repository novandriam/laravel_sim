
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'auth'], function() {

	// Home
	Route::get('/', function () {  
	    return view('admin.selamatdatang');
	});

	// Daftar Aset
	Route::get('kelola/pengguna', 'UserController@index');
	Route::get('kelola/pengguna/getdata', 'UserController@indexData');
	// add
	Route::get('kelola/pengguna/add', 'UserController@add');
	Route::post('kelola/pengguna/add', 'UserController@addact');
	// Delete
	Route::get('kelola/pengguna/delete/{id}', 'UserController@delete');
	// Edit
	Route::get('kelola/pengguna/edit/{id}', 'UserController@edit');
	Route::post('kelola/pengguna/edit', 'UserController@editact');

	// Aset
	Route::get('kelola/aset', 'AsetController@index');
	Route::get('kelola/aset/getdata', 'AsetController@indexData');

	// Alat
	Route::get('kelola/alat', 'AlatController@index');
	Route::get('kelola/alat/getdata', 'AlatController@indexData');

	// Kategor Aset
	Route::get('kelola/kategori_aset', 'KategoriAsetController@index');
	Route::get('kelola/kategori_aset/getdata', 'KategoriAsetController@indexData');
	// Tambah Kategori
	Route::get('kelola/kategori_aset/add', 'KategoriAsetController@add');
	Route::post('kelola/kategori_aset/add', 'KategoriAsetController@addact');
	// Edit 
	Route::get('kelola/kategori_aset/edit/{id}', 'KategoriAsetController@edit');
	Route::post('kelola/kategori_aset/edit', 'KategoriAsetController@editact');
	// Delete
	Route::get('kelola/kategori_aset/delete/{id}', 'KategoriAsetController@delete');


});


Route::auth();   

Route::get('/home', 'HomeController@index');
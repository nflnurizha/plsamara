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


//Route::get('/', 'inputcontroller@index')->name('input');

Route::get('/', function () {
    return view('login');
});
Auth::routes();
Route::get('/datapribadilansia', 'datapribadilansiacontroller@index')->name('datapribadilansia');
// Route::get('/drm', 'datarekammedislansiacontroller@index');
Route::get('/drm', 'datarekammedislansiacontroller@show')->name('drm');
Route::get('/homelansia', 'homelansiacontroller@index')->name('homelansia');

Route::group(['middleware' => 'admin'], function(){

Route::get('/home', 'homecontroller@index')->name('home');


	//MENU KADER
Route::get('/inputdatakader', 'inputdatakadercontroller@index')->name('inputdatakader');	//tampilan input
Route::post('/inputdatakader', 'inputdatakadercontroller@simpan');	//create
Route::get('/datakader', 'datakadercontroller@data')->name('datakader');				//tampilan hasil
Route::get('/showdatakader/{id}', 'datakadercontroller@show')->name('showdatakader');
Route::put('/showdatakader/{id}', 'datakadercontroller@update');		//tampilan hasil
	Route::get('/datakader/{id}', 'datakadercontroller@destroy');	//delete


	//MENU LANSIA
Route::get('/inputdatalansia', 'inputdatalansiacontroller@index')->name('inputdatalansia');
Route::post('/inputdatalansia', 'inputdatalansiacontroller@simpan');
Route::get('/datalansia', 'datalansiacontroller@data')->name('datalansia');				//tampilan hasil
Route::get('/showdatalansia/{id}', 'datalansiacontroller@show')->name('showdatalansia');
Route::put('/showdatalansia/{id}', 'datalansiacontroller@update');		//tampilan hasil
	Route::get('/datalansia/{id}', 'datalansiacontroller@destroy');	//delete

	//MENU REKAM MEDIS
Route::get('/tambahrekammedis/{id}', 'inputrekammediscontroller@show');	//tampilan input
Route::post('/tambahrekammedis/{id}', 'inputrekammediscontroller@simpan');
Route::get('/datarekammedis', 'datarekammediscontroller@data')->name('datarekammedis');				//tampilan hasil
Route::get('/showrekammedis/{id}', 'datarekammediscontroller@tampil')->name('showrekammedis');
Route::put('/showrekammedis/{id}', 'datarekammediscontroller@update');		
	Route::get('/datarekammedis/{id}', 'datarekammediscontroller@destroy');	//delete

});




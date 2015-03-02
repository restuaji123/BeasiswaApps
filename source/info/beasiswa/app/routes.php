<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('beranda.index');



});
Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::resource("Login", "LoginController");
Route::resource("Beranda", "BerandaController");
Route::resource("Info", "Info1Controller");
Route::resource("Lupa", "LupaController");
Route::resource("Register", "RegisterController");
Route::resource("BeasiswaS1", "beasiswas1Controller");
Route::resource("Topuniversity", "TopController");
Route::resource("BeasiswaS2", "beasiswa2Controller");
Route::resource("BeasiswaS3", "beasiswa3Controller");
Route::resource("BeasiswaDalamNegeri", "beasiswadalamnegeriController");
Route::resource("BeasiswaLuarNegeri", "beasiswaluarnegeriController");
Route::resource("KontakKami", "kontakkamiController");
Route::resource("BeasiswaS1", "index2Controller");
Route::resource("Pendaftaran", "PendaftaranController");
Route::resource("Namacalon", "DatapesertaController");

Route::post("Pendaftaran/post", "PendaftaranController@store");
Route::get("namacalon/{id}/destroy", "NamacalonController@destroy");
Route::get('namacalon/edit/{id}', 'NamacalonController@edit');
Route::post('namacalon/update/{id}', array('as' => 'namacalon.update', 'uses' => 'NamacalonController@update'));
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

Route::get('/', function(){
	return view('accueil');
});



Route::get('/afficherListePositions', 'ListePositionsController@index')->name('ListePositions');
Route::get('/etatReservation', 'EtatReservationController@index')->name('etatReservation');
Route::get('/periodesCodification', 'PeriodesCodificationController@index')->name('periodesCodification');
;

Route::get('/create', 'ChambreController@create')->name('create');

Route::post('/store', 'ChambreController@store')->name('store');

Route::get('/show', 'ChambreController@show')->name('show');

Route::get('/Etagecreate', 'EtageController@create')->name('create');

Route::post('/Etagestore', 'EtageController@store')->name('store');

Route::get('/Pavilloncreate', 'PavillonController@create')->name('Pavilloncreate');

Route::get('/Pavillonindex', 'PavillonController@index')->name('Pavillonindex');

Route::post('/Pavillonstore', 'PavillonController@store')->name('Pavillonstore');

Route::get('/Couloircreate', 'CouloirController@create')->name('Couloircreate');

Route::post('/Couloirstore', 'CouloirController@store')->name('store');

Route::get('/Positioncreate', 'PositionController@create')->name('Positioncreate');

Route::post('/Positionstore', 'PositionController@store')->name('store');

Route::get('/Positionshow', 'PositionController@show')->name('show');

Route::get('/Reservationcreate', 'ReservationController@create')->name('Reservationcreate');

Route::post('/Reservationstore', 'ReservationController@store')->name('Reservationstore');

Route::get('/Reservationshow', 'ReservationController@show')->name('Reservationshow');

Route::get('/Reservationindex', 'ReservationController@index')->name('Reservationindex');

Route::get('/Reservationdestroy', 'ReservationController@destroy')->name('Reservationdestroy');

Route::get('/Reservationedit', 'ReservationController@edit')->name('Reservationedit');

Route::get('/Pavillonshow', 'PavillonController@show')->name('Pavillonshow');

Route::get('/Codificationcreate', 'CodificationController@create')->name('Codificationcreate');

Route::post('/Codificationstore', 'CodificationController@store')->name('Codificationstore');

Route::get('/Codificationdestroy', 'CodificationController@destroy')->name('Codificationdestroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/loginAgent', 'AuthAgent\LoginController@showLoginForm')->name('agent.login');
	Route::post('/loginAgent/login', 'AuthAgent\LoginController@login')->name('agent.login.submit');
	Route::get('/agent', 'AgentController@index')->name('agent.home');	

	Route::get('/Agentindex', 'AgentController@index1')->name('Agentindex');

	Route::get('/Agentcreate', 'AgentController@create')->name('Agentcreate');

	Route::get('/Agentshow', 'AgentController@show')->name('Agentshow');

	Route::get('/Agentdestroy', 'AgentController@destroy')->name('Agentdestroy');

	Route::post('/Agentstore', 'AgentController@store')->name('Agentstore');



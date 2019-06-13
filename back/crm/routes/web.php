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

/* Voir BackController dans app/http/controllers/backcontroller.php */
Route::middleware(['auth'])->group(function () {

	Route::get('/', 'BackController@index')->name('home');

Route::resource('/contact','ContactController');
Route::resource('/projet','ProjetController');
Route::resource('/tache','TacheController');
Route::resource('/objectif','ObjectifController');
Route::resource('/surveillance','SurveillanceController');
Route::resource('/agenda','AgendaController');
Route::resource('/qualiterelation','QualiteRelationController');

Route::get('subindex','AgendaController@subindex')->name('subindex');

Route::resource('/alerte','AlerteController');
Route::resource('/etape','EtapeController');
Route::resource('/etatrelation','EtatRelationController');
Route::resource('/groupe','GroupeController');
Route::resource('/secteur','SecteurController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

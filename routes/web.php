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

//Route::get('/', 'Auth\LoginController@showLoginForm');

// Authentication Routes...
Route::get('/', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('/', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// nav bar routes
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('games', 'GameController');
Route::resource('seasons', 'SeasonController');
Route::resource('weeks', 'WeekController');
Route::resource('teams', 'TeamController');
Route::resource('reports', 'ReportController');
Route::resource('players', 'PlayerController');
Route::resource('coaches', 'CoachController');
Route::resource('referees', 'RefereeController');

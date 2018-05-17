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
Route::get('/coaches', 'HomeController@coach')->name('coach');
Route::get('/games', 'HomeController@game')->name('game');
Route::get('/players', 'HomeController@player')->name('player');
Route::get('/referees', 'HomeController@report')->name('referee');
Route::get('/seasons', 'HomeController@season')->name('season');
Route::get('/teams', 'HomeController@team')->name('team');
Route::get('/weeks', 'HomeController@week')->name('week');
Route::get('/reports', 'HomeController@week')->name('report');

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

Route::get('/', 'Controller@home');
Route::get('/appeal/account', 'AppealController@accountappeal');
Route::post('/appeal/account', 'AppealController@accountappealsubmit');
Route::get('/appeal/ip', 'AppealController@ipappeal');
Route::get('/appeal/{id}', 'AppealController@appeal');
Route::get('/review', 'AppealController@appeallist');
Route::post('/appeal/checkuser/{id}', 'AppealController@checkuser');
Route::post('/appeal/comment/{id}', 'AppealController@comment');
Route::get('/appeal/respond/{id}', 'AppealController@respond');
Route::get('/appeal/reserve/{id}', 'AppealController@reserve');
Route::get('/appeal/release/{id}', 'AppealController@release');
Route::get('/appeal/open/{id}', 'AppealController@open');
Route::get('/appeal/close/{id}/{type}', 'AppealController@close');
Route::post('/appeal/checkuserreview/{id}', 'AppealController@checkuserreview');
Route::get('/appeal/privacy/{id}', 'AppealController@privacy');
Route::get('/appeal/admin/{id}', 'AppealController@admin');
Route::get('/appeal/invalidate/{id}', 'AppealController@invalidate');
Route::get('/appeal/template/{id}', 'AppealController@viewtemplates');
Route::get('/appeal/template/{id}/{template}', 'AppealController@respond');
Route::get('/appeal/custom/{id}', 'AppealController@respondCustom');
Route::post('/appeal/custom/{id}', 'AppealController@respondCustomSubmit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@crashandburn');
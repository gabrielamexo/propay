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

Route::get('/', function () { return view('home');})->name('home');

Route::get('/add', function () { return view('pages.add');})->name('add');

Route::get('/list', 'ControllerMember@list_members')->name('list');

Route::post('create', 'ControllerMember@create_member')->name('create');

Route::get('delete/{id}', 'ControllerMember@delete_member')->name('delete');

Route::get('view/{id}', 'ControllerMember@view_member')->name('view');

Route::post('update', 'ControllerMember@update_member')->name('update');

Route::auth();

Route::get('/home', 'HomeController@index');

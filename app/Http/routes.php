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

Route::get('/', function () {
       return view('welcome');
});

Route::auth();

Route::get('/public', 'HomeController@index')->middleware('auth');

//page for the users to edit their information
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::post('/user/edit/{id}', 'UserController@update')->name('user.edit')->middleware('auth');

//user can view all free pokemons
Route::get('/user/pokemons/{id}', 'UserController@freePokemons')->name('user.pokemons')->middleware('auth');

//user can choose pokemon
Route::get('/user/choose/{id}', 'UserController@choosePokemon')->name('user.choose')->middleware('auth');
Route::post('/user/choose/{id}', 'UserController@savePokemon')->name('user.choose')->middleware('auth');

//user can view their pokemons
Route::get('user/mypokemons/{id}', 'UserController@myPokemons')->name('user.mypokemons')->middleware('auth');

//user can abandon pokemon
Route::get('/user/abandon/{id}', 'UserController@abandon')->name('user.abandon')->middleware('auth');
Route::post('/user/abandon/{id}', 'UserController@saveAbandon')->name('user.abandon')->middleware('auth');

//user can view total strength
Route::get('/user/strength', 'UserController@strength')->name('user.strength')->middleware('auth');


//admin panel
Route::get('/admin', 'AdminController@admin')->name('admin')->middleware('isAdmin');

//admin can view all users
Route::get('/admin/users/view', 'AdminController@view')->name('admin.users.view')->middleware('isAdmin');

//admin can delete users
Route::get('/admin/users/delete/{id}', 'AdminController@delete')->name('admin.users.delete')->middleware('isAdmin');

//admi can mark users as admin
Route::get('/admin/users/mark/{id}', 'AdminController@mark')->name('admin.users.mark')->middleware('isAdmin');
Route::post('/admin/users/mark/{id}', 'AdminController@save')->name('admin.users.mark')->middleware('isAdmin');

//admin can create new pokemon
Route::get('/admin/pokemons/add', 'AdminController@create')->name('admin.pokemons.add')->middleware('isAdmin');
Route::post('/admin/pokemons/add', 'AdminController@store')->name('admin.pokemons.add')->middleware('isAdmin');

//admin can view all pokemons
Route::get('/admin/pokemons/show', 'AdminController@show')->name('admin.pokemons.show')->middleware('isAdmin');

//admin can edit pokemon
Route::get('/admin/pokemons/edit/{id}', 'AdminController@edit')->name('admin.pokemons.edit')->middleware('isAdmin');
Route::post('/admin/pokemons/edit/{id}', 'AdminController@update')->name('admin.pokemons.edit')->middleware('isAdmin');

//admin can delete pokemon
Route::get('/admin/pokemons/delete/{id}', 'AdminController@deletePokemon')->name('admin.pokemons.delete')->middleware('isAdmin');

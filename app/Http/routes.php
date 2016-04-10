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

Route::get('/public', 'HomeController@index');

//page for the users to edit their information
Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/edit/{id}', 'UserController@update')->name('user.edit');

//user can view all free pokemons
Route::get('/user/pokemons/{id}', 'UserController@freePokemons')->name('user.pokemons');

//user can choose pokemon
Route::get('/user/choose/{id}', 'UserController@choosePokemon')->name('user.choose');
Route::post('/user/choose/{id}', 'UserController@savePokemon')->name('user.choose');

//user can view their pokemons
Route::get('user/mypokemons/{id}', 'UserController@myPokemons')->name('user.mypokemons');

//user can abandon pokemon
Route::get('/user/abandon/{id}', 'UserController@abandon')->name('user.abandon');
Route::post('/user/abandon/{id}', 'UserController@saveAbandon')->name('user.abandon');

//user can view total strength
Route::get('/user/strength', 'UserController@strength')->name('user.strength');


//admin panel
Route::get('/admin', 'AdminController@admin')->name('admin');

//admin can view all users
Route::get('/admin/users/view', 'AdminController@view')->name('admin.users.view');

//admin can delete users
Route::get('/admin/users/delete/{id}', 'AdminController@delete')->name('admin.users.delete');

//admi can mark users as admin
Route::get('/admin/users/mark/{id}', 'AdminController@mark')->name('admin.users.mark');
Route::post('/admin/users/mark/{id}', 'AdminController@save')->name('admin.users.mark');

//admin can create new pokemon
Route::get('/admin/pokemons/add', 'AdminController@create')->name('admin.pokemons.add');
Route::post('/admin/pokemons/add', 'AdminController@store')->name('admin.pokemons.add');

//admin can view all pokemons
Route::get('/admin/pokemons/show', 'AdminController@show')->name('admin.pokemons.show');

//admin can edit pokemon
Route::get('/admin/pokemons/edit/{id}', 'AdminController@edit')->name('admin.pokemons.edit');
Route::post('/admin/pokemons/edit/{id}', 'AdminController@update')->name('admin.pokemons.edit');

//admin can delete pokemon
Route::get('/admin/pokemons/delete/{id}', 'AdminController@deletePokemon')->name('admin.pokemons.delete');

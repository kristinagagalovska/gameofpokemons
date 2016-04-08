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

//admin panel
Route::get('/admin', 'AdminController@admin')->name('admin');

//admin can view all users
Route::get('/admin/users/view', 'AdminController@view')->name('admin.users.view');

//admin can delete users
Route::get('/admin/users/delete/{id}', 'AdminController@delete')->name('admin.users.delete');

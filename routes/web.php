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

Route::get('/','Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('project','ProjectController');

Route::resource('dips','DIPController');

Route::resource('trainings','TrainingController');

Route::resource('ngo','NGOController');

Route::resource('staffs','StaffController');

Route::get('dip/create', ['as' => 'dip.create','uses' => 'DIPController@create']);
Route::get('dip/store', ['as' => 'dip.store','uses' => 'DIPController@store']);
Route::get('admin/post', ['as' => 'post','uses' => 'Backend\PostController@index']);
Route::get('post/create', ['as' => 'post.create','uses' => 'Backend\PostController@create']);
Route::post('post/store', ['as' => 'post.store','uses' => 'Backend\PostController@store']);
Route::get('post/edit/{id}', ['as' => 'post.edit','uses' => 'Backend\PostController@edit']);
Route::patch('post/update/{id}', ['as' => 'post.update','uses' => 'Backend\PostController@update']);
Route::get('post/delete/{id}', ['as' => 'post.delete','uses' => 'Backend\PostController@destroy']);
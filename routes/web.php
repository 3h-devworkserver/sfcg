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

Route::get('settings/generalsetting', 'SettingController@generalSetting');
Route::post('settings/generalsetting', 'SettingController@storeGeneralSetting');
Route::patch('settings/generalsetting', 'SettingController@storeGeneralSetting');

Route::get('dip/index', ['as' => 'dip.index','uses' => 'DIPController@index']);
Route::get('dip/create', ['as' => 'dip.create','uses' => 'DIPController@create']);
Route::post('dip/store', ['as' => 'dip.store','uses' => 'DIPController@store']);
Route::get('dip/edit/{id}', ['as' => 'dip.edit','uses' => 'DIPController@edit']);
Route::patch('dip/update/{id}', ['as' => 'dip.update','uses' => 'DIPController@update']);
Route::delete('dip/delete/{id}', ['as' => 'dip.destroy','uses' => 'DIPController@destroy']);
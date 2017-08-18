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

Route::get('/', 'HomeController@index');

Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::get('/admin/ihomes', 'AdminController@overview');
Route::get('/admin/ihomes/{ihome}/edit', 'AdminController@editIhome');
Route::post('/admin/ihomes/{ihome}/edit', 'AdminController@updateIhome');
Route::delete('/admin/ihomes/{ihome}/delete', 'AdminController@deleteIhome');

Route::get('/admin/ihome/add', 'AdminController@addIhome');
Route::post('/admin/ihome/add', 'AdminController@storeIhome');

Route::get('/admin/lights', 'AdminController@ligthOverview');
Route::get('/admin/lights/{ihome}/edit', 'AdminController@editLights');
Route::post('/admin/lights/{ihome}/edit', 'AdminController@updateLights');

Route::get('/admin/profile/{user}', 'AdminController@profile');
Route::get('/admin/profile/{user}/edit', 'AdminController@profileEdit');
Route::post('/admin/profile/{user}/edit', 'AdminController@profileUpdate');

Auth::routes();

Route::get('/test', 'TestController@test');

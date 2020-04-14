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

// Back-end
Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Admin\AdminController@index')->name('admin.index');
Route::get('/home', function ()
{
	return view('homepage.index');
});

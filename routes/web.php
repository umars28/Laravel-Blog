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
Route::get('/', 'Admin\AdminController@index')->name('admin.index');
Route::group(['prefix' => 'Homepage'], function () {
    Route::get('/homepage', 'Admin\AdminHomepageController@index')->name('admin.homepage.index');
    Route::post('/update/{id}', 'Admin\AdminHomepageController@update')->name('admin.homepage.update');
});

Route::get('/home', 'HomepageController@index')->name('homepage.index');


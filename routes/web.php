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
Route::group(['prefix' => 'Admin'], function () {
    Route::get('/homepage', 'Admin\AdminHomepageController@index')->name('admin.homepage.index');
    Route::post('/update/{id}', 'Admin\AdminHomepageController@update')->name('admin.homepage.update');
});
Route::group(['prefix' => 'Admin'], function () {
    Route::get('/about', 'Admin\AdminAboutController@index')->name('admin.about.index');
    Route::post('/about/{id}', 'Admin\AdminAboutController@update')->name('admin.about.update');
});
Route::group(['prefix' => 'Admin'], function () {
    Route::get('/list-articles', 'Admin\AdminArticlesController@index')->name('admin.articles.index');
    Route::post('/articles/save', 'Admin\AdminArticlesController@save')->name('admin.articles.save');
    Route::get('/articles/edit/{id}', 'Admin\AdminArticlesController@edit')->name('admin.articles.edit');
    Route::put('/articles/update/{id}', 'Admin\AdminArticlesController@update')->name('admin.articles.update');
    Route::get('/categories', 'Admin\AdminCategoriesController@index')->name('admin.categories.index');
    Route::post('/categories/save', 'Admin\AdminCategoriesController@save')->name('admin.categories.save');
    Route::get('/categories/edit{id}', 'Admin\AdminCategoriesController@edit')->name('admin.categories.edit');
    Route::put('/categories/update{id}', 'Admin\AdminCategoriesController@update')->name('admin.categories.update');
});

Route::get('/home', 'HomepageController@index')->name('homepage.index');



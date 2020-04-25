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
Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard.index');
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
Route::group(['prefix' => 'Admin'], function () {
    Route::get('/contact-us/index', 'Admin\AdminContactController@index')->name('admin.contact.index');
    Route::post('/contact-us/update/{id}', 'Admin\AdminContactController@update')->name('admin.contact.update');
    Route::get('/feedback/show', 'Admin\AdminFeedbackController@show')->name('admin.feedback.index');
});
Route::group(['prefix' => 'Admin'], function () {
    Route::get('/subject/index', 'Admin\AdminSubjectController@index')->name('admin.subject.index');
    Route::post('/subject/save', 'Admin\AdminSubjectController@save')->name('admin.subject.save');
    Route::get('/subject/edit/{id}', 'Admin\AdminSubjectController@edit')->name('admin.subject.edit');
    Route::post('/subject/update/{id}', 'Admin\AdminSubjectController@update')->name('admin.subject.update');
    Route::get('/faq/index', 'Admin\AdminFaqController@index')->name('admin.faq.index');
    Route::post('/faq/save', 'Admin\AdminFaqController@save')->name('admin.faq.save');
    Route::get('/faq/edit/{id}', 'Admin\AdminFaqController@edit')->name('admin.faq.edit');
    Route::post('/faq/update/{id}', 'Admin\AdminFaqController@update')->name('admin.faq.update');
});

Route::get('/home', 'HomepageController@index')->name('homepage.index');
Route::get('/about', 'AboutController@index')->name('about.index');



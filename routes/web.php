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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profiles/{user}', 'ProfileController@show')->name('profiles.show');

Route::get('pdf/{user}', 'ProfileController@getPdf')->name('getPDF');

Route::match(['get', 'post'], '/documents/create', 'DocumentController@create')->name('document.create');
Route::post('/documents/basic', 'DocumentController@basicStoreJson')->name('document.basic.store');
Route::post('/documents/school', 'DocumentController@schoolStoreJson')->name('document.school.store');
Route::post('/documents/experience', 'DocumentController@experienceStoreJson')->name('document.experience.store');
Route::post('/documents/certificate', 'DocumentController@certificateStoreJson')->name('document.certificate.store');
Route::post('/documents/project', 'DocumentController@projectStoreJson')->name('document.project.store');
Route::post('/documnets/save', 'DocumentController@save')->name('document.save');

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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user','UsersController');
Route::resource('category','CategoriesController');
Route::resource('subcategory','SubCategoriesController');
Route::resource('News','NewsController');
Route::resource('photoFeature','PhotoFeaturesController');
Route::resource('videoFeature','VideoFeaturesController');
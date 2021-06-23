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
    return view('auth.login');
});

Route::get('FormStore','BookController@create')->middleware('auth');
Route::get('/showBook','BookController@index')->middleware('auth');



Route::post('book/store','BookController@store')->middleware('auth');
Route::post('book/update/{id?}','BookController@update')->middleware('auth');

Route::get('deletebook/{id?}','BookController@destroy')->middleware('auth');
Route::get('dashboard','dashboardController@index')->middleware('auth');

Route::get('showAuthor','AuthorController@index')->middleware('auth');
Route::get('FormStoreAuthor','AuthorController@create')->middleware('auth');

Route::get('showCategorey','CategoreyController@index')->middleware('auth');
Route::get('FormStoreCategorey','CategoreyController@create')->middleware('auth');

Route::get('showPublish','PublishController@index')->middleware('auth');
Route::get('FormStorePublish','PublishController@create')->middleware('auth');

Route::get('deletePublish/{id?}','PublishController@destroy')->middleware('auth');
Route::post('publish/store','PublishController@store');
Route::post('publish/update/{id?}','PublishController@update')->middleware('auth');

Route::post('categorey/store','CategoreyController@store');
Route::post('categorey/update/{id?}','CategoreyController@update')->middleware('auth');

Route::get('deleteCategorey/{id?}','CategoreyController@destroy')->middleware('auth');

Route::post('author/store','AuthorController@store')->middleware('auth');
Route::post('author/update/{id?}','AuthorController@update')->middleware('auth');

Route::get('deleteAuthor/{id?}','AuthorController@destroy')->middleware('auth');

Route::get('EditeAuthor/{id?}','AuthorController@edite')->middleware('auth');
Route::get('EditeCategorey/{id?}','CategoreyController@edit')->middleware('auth');
Route::get('EditePublish/{id?}','PublishController@edit')->middleware('auth');
Route::get('EditeBook/{id?}','BookController@edit')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

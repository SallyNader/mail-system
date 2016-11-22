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


Route::get('try1','ListsController@try1');
Route::get('/', function () {
    return view('mail.uploadthemes');
});

Route::post('theme/uploadtheme','ThemesController@uploadtheme');
Route::resource('theme','ThemesController');
Route::resource('image','ImagesController');


Route::post('list/deletecontact','ListsController@destroyContact');


Route::resource('list','ListsController');

Route::post('contact/addtolist','ContactsController@addToList');
Route::resource('contact','ContactsController');

Route::resource('mail','MailsController');
Auth::routes();

Route::get('/home', 'HomeController@index');

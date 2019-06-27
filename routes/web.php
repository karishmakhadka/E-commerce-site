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

 Route::get('/','IndexController@index');
Route::get('form','FormController@index');
Route::get('action','FormController@list');
Route::post('form','FormController@store');
Route::get('form/{id}/edit','FormController@edit');
Route::delete('form/{id}','FormController@delete');
Route::post('action/{id}','FormController@update');
Route::get('dress','DressController@index')->name('dress.index');
Route::get('product/{id}','DressController@detail')->middleware('auth');
Route::resource('product_form','ProductFormController')->middleware('auth');
Route::post('enquiry_send','FormController@send_enquiry');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('shoes','ShoeController@index');
Route::resource('products','ProductController')->middleware('auth');
Route::get('search','ProductController@search')->name('search');

Route::resource('categories','CategoryController')->middleware('auth');

Route::get('category/{category}', 'IndexController@category');
Route::get('category/{category}/{item}', 'IndexController@productDetail');
Route::resource('purchases','PurchaseController');
Route::resource('enquries','EnquiryController');
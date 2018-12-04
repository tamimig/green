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



Route::get('/', 'PaymentmethodsController@index')->name('home'); 

Route::get('create/card', 'CardsController@create')->name('card.create'); 

Route::get('create/bank', 'BanksController@create')->name('bank.create'); 

Route::post('card/store', 'CardsController@store')->name('card.store'); 

Route::post('bank/store', 'BanksController@store')->name('bank.store');

Route::get('card/generate/create', 'CardgeneratesController@create')->name('card.generate.create'); 

Route::get('bank/generate/create', 'BankgeneratesController@create')->name('bank.generate.create'); 

Route::post('card/generate/store', 'CardgeneratesController@store')->name('card.generate.store'); 

Route::post('bank/generate/store', 'BankgeneratesController@store')->name('bank.generate.store'); 





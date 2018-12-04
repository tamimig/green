<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// List of payment options
Route::get('paymentoptions', 'PaymentmethodsController@display')->name('paymentoptions');

// Generate payment page for the bank 

Route::get('bankpage', 'BanksController@index')->name('bankpage'); 


// Generate payment page for the credit card 

Route::get('cardpage', 'CardsController@index')->name('cardpage'); 

//Bank transaction status

Route::get('bank/transaction', 'BankgeneratesController@display')->name('bank.transaction'); 


// Card transaction status

Route::get('card/transaction', 'CardgeneratesController@index')->name('card.transaction'); 





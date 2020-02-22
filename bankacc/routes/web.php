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
Use App\Bank_Accounts;
Use App\Details;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/add-bank_accounts','Bank_AccountsController@ShowAddBank_AccountsForm')->name('bank_accounts.add');
    Route::post('/add','Bank_AccountsController@addBank_Accounts')->name('bank_accounts.save');
    Route::get('/bank_accounts','Bank_AccountsController@ShowBank_Accounts')->name('bank_accounts');
    Route::delete('/bank_accounts/{id}','Bank_AccountsController@destroy')->name('bank_accounts.delete');
    Route::get('/bank_accounts/edit/{id}','Bank_AccountsController@showEditForm')->name('bank_accounts.edit');
    Route::put('/bank_accounts/update/{id}','Bank_AccountsController@update')->name('bank_accounts.update');
    Route::get('/details/{id}','DetailsController@showDetails')->name('details');
    Route::get('/add-details/{id}','DetailsController@showAddForm')->name('details.add');
    Route::post('/save-details/{id}','DetailsController@saveDetails')->name('details.save');
    Route::delete('/delete-details/{details_id}/{bank_accounts_id}','DetailsController@destroy')->name('details.delete');
    Route::get('/details/edit/{details_id}/{bank_accounts_id}','DetailsController@showEditForm')->name('details.edit');
    Route::put('/details/update/{details_id}/{bank_accounts_id}','DetailsController@updateDetails')->name('details.update');
    Route::get('/details/specific/{id}','DetailsController@showSpecific')->name('details.specific');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

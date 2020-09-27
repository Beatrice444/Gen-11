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
Use App\Vacant;
Use App\Rqs;
Use App\Inspect;
Use App\Apply;
Use App\Booked;
Use App\Document;
Use App\Term;
Use App\RS;
Use App\Tenant;
Use App\Landlord;
use App\Properties;
use App\mt;
use App\statistic;
use App\Admin;
use App\Remove;
use App\Notify;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/vacant','VacantsController@Vacant')->name('vacant');
    Route::get('/rqs','RqsController@Rqs')->name('rqs');
    Route::get('/inspect','InspectsController@Inspect')->name('inspect');
    Route::get('/apply','AppliesController@Apply')->name('apply');
    Route::get('/booked','BookedsController@Booked')->name('booked');
    Route::get('/document','DocumentsController@Document')->name('document');
    Route::get('/term','TermsController@Term')->name('term');
    Route::get('/service','ServicesController@Service')->name('service');
    Route::get('/messages','MessagesController@Messages')->name('messages');
    Route::get('/report','ReportController@Report')->name('report');
    Route::get('/notification','NotificationController@Notification')->name('notification');
    Route::get('/change','ChangeController@Change')->name('change');
    Route::get('/login as tenant here','TenantController@Tenant')->name('login as tenant here');
    Route::get('/login as landlord here','LandlordController@Landlord')->name('login as landlord here');
    Route::get('/mt','mtController@mt')->name('mt');
    Route::get('/properties','PropertiesController@Properties')->name('properties');
    Route::get('/statistic','statisticController@statistic')->name('statistic');
    Route::get('/admin','AdminController@Admin')->name('admin');
    Route::get('/remove','RemoveController@Remove')->name('remove');
    Route::get('/notify','NotifyController@Notify')->name('notify');
    Route::post('/save','VacantsController@save')->name('save');
    Route::delete('/remove/delete', 'RemoveController@destroy')->name('remove.delete');
    Route::get('/remove/edit', 'RemoveController@Edit')->name('remove.edit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

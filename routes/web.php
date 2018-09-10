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
Auth::routes();

Route::get('/',[
	'as'=>'home',
	'uses'=>'HomeController@index'
]);
Route::get('/welcome', function () {
    return view('welcome');
});


Route::post('/config/storeSidebarState', 'ConfigsController@storeSidebarState')->name('storeSidebarState');

//Route::get('/calendar', 'CalendarController@index')->name('calendar');
Route::get('/contact', 'ContactsController@index')->name('contact');
Route::group(['prefix'=>'customer'],function(){
	Route::get('ajax/AjaxCustomerData', 'CustomersController@AjaxCustomerData')->name('AjaxCustomerData');
	Route::resource('/', 'CustomersController');
});
Route::get('/customer', 'CustomersController@index')->name('customer');
Route::get('/ticket', 'TicketsController@index')->name('ticket');
Route::group(['prefix'=>'calendar'],function(){
	Route::resource('/', 'CalendarController');
});
Route::group(['prefix'=>'setting'],function(){
	Route::resource('config', 'ConfigsController');
	Route::post('module/ajax/ChangeSort', 'ModulesController@ChangeSort')->name('ChangeSort');
	Route::post('module/ajax/ChangeIsMenu/{id}', 'ModulesController@ChangeIsMenu')->name('ChangeIsMenu');
	Route::get('module/AjaxModuleData', 'ModulesController@AjaxModuleData')->name('AjaxModuleData');
	Route::get('module/detail/{id}', 'ModulesController@getItemDetail')->name('getModuleDetail');
	Route::resource('module', 'ModulesController');
	//
});


	//Route::get('/setting/module/getAjaxModuleData', 'ModulesController@getAjaxModuleData')->name('getAjaxModuleData');

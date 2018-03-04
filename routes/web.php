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

Route::get('/calendar', 'CalendarController@index')->name('calendar');
Route::get('/contact', 'ContactsController@index')->name('contact');
Route::get('/customer', 'CustomersController@index')->name('customer');
Route::get('/ticket', 'TicketsController@index')->name('ticket');

Route::group(['prefix'=>'setting'],function(){
	Route::get('/')->name('setting');
	Route::get('/config', 'ConfigsController@index')->name('config');
	Route::group(['prefix'=>'module'],function(){
		Route::get('/', 'ModulesController@index')->name('module');
		Route::get('/getAjaxModuleData', 'ModulesController@getAjaxModuleData')->name('getAjaxModuleData');
	});

});


	Route::get('/setting/module/getAjaxModuleData', 'ModulesController@getAjaxModuleData')->name('getAjaxModuleData');

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
Route::get('/dashboard', 'AdminPanelController@dashboard')->name('dashboard');
Route::get('/booking', 'AdminPanelController@booking')->name('booking');
Route::get('/addBus', 'AdminPanelController@addNewBus')->name('add_bus');
Route::get('/viewAllBus', 'AdminPanelController@viewAllBus')->name('all_bus');
Route::get('/addCancellation', 'AdminPanelController@addNewCancellation')->name('add_cancellation');
Route::get('/cancellation', 'AdminPanelController@cancellation')->name('cancellation');
Route::get('/addDriver', 'AdminPanelController@addNewDriver')->name('add_driver');
Route::get('/allDriver', 'AdminPanelController@viewAllDriver')->name('all_driver');
Route::get('/addRoute', 'AdminPanelController@addNewRoute')->name('add_route');
Route::get('/allRoute', 'AdminPanelController@viewAllRoute')->name('all_route');

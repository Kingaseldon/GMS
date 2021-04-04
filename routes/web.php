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
// User side Routing
Route::get('/','WelcomeController@home')->name('home');
Route::get('/about','WelcomeController@aboutus');
Route::get('/rooms','WelcomeController@rooms');
Route::get('/terms','WelcomeController@terms');

Route::get('bookroom','BookingController@book');
Route::get('/payment','BookingController@payment')->name('payment');
Route::get('cancelbooking','BookingController@cancel');
Route::get('proceed_booking/{id}','BookingController@proceed_booking');
Route::get('bookingroom','BookingController@bookingroom');

//Book and Pay
Route::post('bookandpay', 'BookingController@store')->name('bookandpay');
Route::post('pay', 'BookingController@pay')->name('pay');


//Admin Panel Routing
Route::redirect('/admin', '/login');
Auth::routes(['register' => false]);
Route::get('/dashboard-v1', 'HomeController@dashboardV1')->name('dashboard-v1');
Route::get('/room', 'HomeController@room')->name('room');
Route::get('/registers', 'HomeController@registers')->name('registers');
Route::get('/feedback', 'HomeController@feedback')->name('feedback');
Route::get('/inventory', 'HomeController@inventory')->name('inventory');
Route::get('/addinventory', 'HomeController@addinventory')->name('addinventory');
Route::get('/addroom', 'HomeController@addroom')->name('addroom');
Route::get('/registersdetail/{id}', 'HomeController@registersdetail')->name('registersdetail');

Route::post('addroomdetails', 'RoomController@store')->name('addroomdetails');
Route::post('registercustomers', 'CustomerController@store')->name('registercustomers');
Route::post('addinventory', 'InventoryController@store')->name('addinventory');

Route::get('/destroy/{id}','HomeController@destroy')->name('booking.destroy');
  



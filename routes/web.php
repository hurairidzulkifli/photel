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

//ClientsController Route
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::post('/clients/store', 'ClientController@store')->name('clients.store');
Route::get('clients/edit/{id}', 'ClientController@edit')->name('clients.edit');
Route::post('clients/update/{id}', 'ClientController@update')->name('clients.update');
Route::get('clients/delete/{id}', 'ClientController@destroy')->name('clients.destroy');
Route::get('clients/show/{id}', 'ClientController@show')->name('clients.show');

//RoomController Routes
Route::resource('rooms', 'RoomController');
// Route::get('rooms/edit/{id}','RoomController@edit')->name('rooms.edit');
Route::resource('bookings', 'BookingController');

// Cancel Bookings
Route::post('bookings/{room_id}/{booking_id}', 'BookingController@cancel')->name('bookings.cancel');

//View Canceled Bookings
Route::get('bookings/canceled', 'BookingController@canceledBookings')->name('bookings.canceled');

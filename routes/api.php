<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/halls','SalleController@getHallsDetails');
Route::get('/allBookings/{ligueId}','ReservationController@allBookingsById');
Route::post('/auth','LigueController@login');
Route::post('/makeReservation','ReservationController@makeReservation');
Route::post('/league','LigueController@getLeagueById');
Route::post('/league/resa','ReservationController@allBookingsById');

Route::get('/currentBookingsList','ReservationController@getCurrentBookingsList');
Route::get('/currentBookingsList/{ligueId}','ReservationController@getCurrentBookingsListById');
Route::get('/allAccounts','LigueController@getAllAccounts');
Route::get('/changeHallFeatureById/{salleId}','SalleController@getDescriptionByHall');
Route::post('/activation','LigueController@changeActivationStatus');
Route::put('/changeHallFeature','SalleController@changeHallFeature');
Route::put('/changeDigicode','SalleController@changeDigicode');

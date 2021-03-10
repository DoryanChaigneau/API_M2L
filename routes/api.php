<?php

use Illuminate\Support\Facades\Route;

Route::post('/auth','LigueController@login');
Route::post('/makeReservation','ReservationController@makeReservation');
Route::post('/league','LigueController@getLeagueById');
Route::get('/halls','SalleController@getHallsDetails');
Route::post('/league/resa','ReservationController@allBookingsById');

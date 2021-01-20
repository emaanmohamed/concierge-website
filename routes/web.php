<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;


Route::get('/six', function () {
    return view('pages.six');
});

Route::group(['prefix' => '/{lang}'], function() {

    Route::get('/home', 'Site\HomeController@index')->name('home');
    Route::get('/register_intro', 'Site\HomeController@registrationIntro')->name('register_intro');
    Route::get('/hotel-registration', 'Site\HomeController@hotelRegistration')->name('hotelRegistration');
    Route::post('/addHotelApi', 'Site\HomeController@addHotelApi')->name('addHotelApi');
});

<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function () {
//    return view('home');
//});
//Route::get('/{lang}', function ($lang) {
//
//    return view('home');
//});
Route::group(['prefix' => '/{lang}'], function() {

    Route::get('/home', 'Site\HomeController@index')->name('home');
    Route::get('/register_intro', 'Site\HomeController@registrationIntro')->name('register_intro');
    Route::get('/hotelRegistration', 'Site\HomeController@hotelRegistration')->name('hotelRegistration');
    Route::post('/addHotelApi', 'Site\HomeController@addHotelApi')->name('addHotelApi');
});

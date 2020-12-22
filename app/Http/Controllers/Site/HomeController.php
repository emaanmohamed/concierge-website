<?php

namespace App\Http\Controllers\Site;

//use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $offers = app('App\Http\Controllers\ApiController')->gettingOffers();
        $areas = app('App\Http\Controllers\ApiController')->gettingAreas();
        $trips = app('App\Http\Controllers\ApiController')->gettingTrips();
        return view('home',["offers"=>$offers,"areas"=>$areas,"trips"=>$trips]);
    }
    public function registrationIntro(){
    return view('website.registrationIntro');
    }
    public function hotelRegistration(){
    return view('website.hotelRegistration');
    }
    public function addHotelApi(Request $request){
        $hotel=app('App\Http\Controllers\ApiController')->addHotel($request);
        return $hotel;
    }
}

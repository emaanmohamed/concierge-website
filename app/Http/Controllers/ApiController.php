<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function gettingOffers(){

    $offers= $this->cutlGet('offers/list');
    return $offers['offers'];
    }
    public function gettingAreas(){
    $areas= $this->cutlGet('areas/list');
    return $areas['areas'];
    }
    public function gettingTrips(){
    $trips= $this->cutlGet('trips/list');
    return $trips['trips'];
    }
    public function addHotel($request){
      $hotel= $this->cutlPost('hotel_registration',$request);
    return $hotel;
    }

    private function cutlGet($link){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "alconciergeapp.com/application/api/api/$link",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "DEVELOPER_KEY: AIzaSyCsoxJyxfRCcXkyyN7q2NBJn1lDA10AELQ",
                ": "
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return  collect(json_decode($response));
    }
    private function cutlPost($link,$request){
        $info=$request->request->all();
        $ar=array('s_hotel_name' => $request->s_hotel_name,'s_contact_name' => $request->s_contact_name,'contactnumber1' => $request->contactnumber1,'contactnumber2' => $request->contactnumber2,'s_q_other_hotel' =>$request->s_q_other_hotel,'s_q_reservation_sys' => $request->s_q_reservation_sys,'add_street_address' => $request->add_street_address,'add_address1' => $request->add_address1,'add_country' => $request->add_country,'add_city' => $request->add_city,'add_postal' => $request->add_postal,'room_RoomType' => json_encode($request->room_RoomType),'room_numberOfRoom' => json_encode($request->room_numberOfRoom),'room_bedsType' => json_encode($request->room_bedsType),'room_numberOfPass' =>json_encode($request->room_numberOfPass),'room_sizeOfRoom' => json_encode($request->room_sizeOfRoom),'room_measurement_unit' => json_encode($request->room_measurement_unit),'room_price' => json_encode($request->room_price),'room_currency' => json_encode($request->room_currency),'roomFacilities' =>json_encode($request->roomFacilities),'allow_parking' => $request->allow_parking,'allow_breakfast' => $request->allow_breakfast,'language' => json_encode($request->language),'facilities1' =>json_encode( $request->facilities1),'facilities2' => json_encode($request->facilities2),'imgs' => json_encode($request->imgs),'police_nightsInAdvance' => $request->police_nightsInAdvance,'police_CanelationFees' => $request->police_CanelationFees,'police_arrive' => $request->police_arrive,'police_departure' =>$request->police_departure,'allow_child' => $request->allow_child,'allow_pets' => $request->allow_pets,'allow_cretidCard' => $request->allow_cretidCard,'nameOnRecipts' => $request->nameOnRecipts,'s_q_AddressQuestion' => $request->s_q_AddressQuestion);
//      $tet= array('s_hotel_name' => 'fsge','s_contact_name' => 'g','contactnumber1' => '0048765','contactnumber2' => '0048765','s_q_other_hotel' => '1','s_q_reservation_sys' => '1','add_street_address' => '\'ayhabd\'','add_address1' => '\'fsgswhgdhe drhdeh \'','add_country' => '\'fqgarsg\'','add_city' => '\'ngms\'','add_postal' => '11835','room_RoomType[0]' => 'gf','room_RoomType[1]' => 'sd','room_RoomType[2]' => 'fg','room_numberOfRoom[0]' => '12 ','room_numberOfRoom[1]' => '22','room_numberOfRoom[2]' => '4','room_bedsType[0][0]' => '["name":"name1","number":"21"]','room_bedsType[0][1]' => '{"name":"name2","number":"22"}','room_bedsType[0][2]' => '{"name":"name3","number":"23"}','room_bedsType[1][0]' => '{"name":"name1","number":"24"}','room_bedsType[1][1]' => '{"name":"name2","number":"25"}','room_bedsType[2][0]' => '{"name":"name3","number":"26"}','room_numberOfPass[0]' => '3','room_numberOfPass[1]' => '1','room_numberOfPass[2]' => '2','room_sizeOfRoom[0]' => '222','room_sizeOfRoom[1]' => '212','room_sizeOfRoom[2]' => '232','room_measurement_unit[0]' => 'cm','room_measurement_unit[1]' => 'cm','room_measurement_unit[2]' => 'cm','room_price[0]' => '300','room_price[1]' => '300','room_price[2]' => '300','room_currency[0]' => '\'usd\'','room_currency[1]' => '\'usd\'','room_currency[2]' => '\'usd\'','allow_parking' => '1','allow_breakfast' => '0','language[0]' => 'eng ','language[1]' => 'ar','facilities1[0]' => 'wifi','facilities1[1]' => 'resturant','allow_extraBed' => '0','facilities2' => '[\'view\',\'balcony\',\'fsg\']','roomFacilities' => '[\'fan\',\'ec\',\'specInt\',\'kit\']','imgs' => '[\'dsfghszaGs\',\'fesjbgsgjszf\',\'dfxhgdx\']','police_nightsInAdvance' => '\'ysd\'','police_CanelationFees' => '\'20%\'','police_arrive' => '[\'20\',\'45\']','police_departure' => '[\'55\',\'66\']','allow_child' => '1','allow_pets' => '0','allow_cretidCard' => '1','nameOnRecipts' => '\'salma\'s Hotel\'','s_q_AddressQuestion' => 'yes');
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "alconciergeapp.com/application/api/api/$link",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $ar,
            CURLOPT_HTTPHEADER => array(
                "DEVELOPER_KEY: AIzaSyCsoxJyxfRCcXkyyN7q2NBJn1lDA10AELQ"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return  collect(json_decode($response));
    }
}

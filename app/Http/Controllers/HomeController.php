<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends ExpediaController
{

    private $defaultRequestParam = 'scenario=deal-finder&page=foo&uid=foo&productType=Hotel';

    public function index(){

        $this->setHttpMethod('GET');
        $this->setHttpParams('scenario=deal-finder&page=foo&uid=foo&productType=Hotel');
        $response = $this->request();

        $data = \GuzzleHttp\json_decode($response->getBody());

        return view('pages.one',['hotels'=>$data->offers]);

    }

    public function postSearch(Request $request)
    {

        $paramsArray = array(
            'destinationName'   => $request->input('destinationName'),
            'minTripStartDate'  => $request->input('dpd1'),
            'maxTripStartDate'  => $request->input('dpd2'),
            'numberOfRoomsLeft' => $request->input('rooms'),
            'minStarRating'     => $request->input('minStarRating'),
        );

        $queryParams = http_build_query($paramsArray);

        $this->setHttpMethod('GET');
        $this->setHttpParams($this->defaultRequestParam . '&' . $queryParams);
        $response = $this->request();

        $data = \GuzzleHttp\json_decode($response->getBody());

        if( $data->offers == new \stdClass()){
            $resultHotels = null;
        } else{
            $resultHotels = $data->offers;
        }

        return view('pages.one',['hotels'=> $resultHotels, 'searchDetails' => true]);
    }

}
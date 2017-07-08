<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends ExpediaController
{

    private $defaultRequestParam = 'scenario=deal-finder&page=foo&uid=foo&productType=Hotel';

    public function index(){

        $response = $this->setHttpMethod('GET')
        ->setHttpParams('scenario=deal-finder&page=foo&uid=foo&productType=Hotel')
        ->request();

        $data = \GuzzleHttp\json_decode($response->getBody());
        //print_r($data->offers);
        return view('pages.one',['hotels'=>$data->offers->Hotel]);

    }

    public function searchForHotels(){



        $response = $this->setHttpMethod('GET')
            ->setHttpParams($this->defaultRequestParam)
            ->request();

        $data = \GuzzleHttp\json_decode($response->getBody());
        //print_r($data->offers);
        return view('pages.one',['hotels'=>$data->offers->Hotel]);


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

        $response = $this->setHttpMethod('GET')
            ->setHttpParams($this->defaultRequestParam . '&'. $queryParams)
            ->request();

        $data = \GuzzleHttp\json_decode($response->getBody());
        
        return view('pages.one',['hotels'=>$data->offers->Hotel]);
    }

}
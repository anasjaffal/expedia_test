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
        print_r($request->all());
        print_r($request->input('dpd1')); die;

        $paramsArray = array(
            'destinationName' => $request->input('destinationName'),
            ''
        );
        $response = $this->setHttpMethod('GET')
            ->setHttpParams($this->defaultRequestParam)
            ->request();

        $data = \GuzzleHttp\json_decode($response->getBody());
        return view('pages.one',['hotels'=>$data->offers->Hotel]);
    }

}
<?php

namespace App\Http\Controllers;

class HomeController extends ExpediaController
{

    public function index(){

        $response = $this->setHttpMethod('GET')
        ->setHttpParams('scenario=deal-finder&page=foo&uid=foo&productType=Hotel')
        ->request();

        $data = \GuzzleHttp\json_decode($response->getBody());
        print_r($data->offers);
        //return view('pages.one',['hotels'=>$data->offers->Hotel]);

    }


}
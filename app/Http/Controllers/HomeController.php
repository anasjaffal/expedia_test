<?php

namespace App\Http\Controllers;

class HomeController extends ExpediaController
{

    public function index(){

        $response = $this->setHttpMethod('GET')
        ->setHttpParams('scenario=deal-finder&page=foo&uid=foo&productType=Hotel')
        ->request();


        //print_r($response);
        return view('pages.one');

    }


}
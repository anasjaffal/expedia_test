<?php

namespace App\Http\Controllers;

class HomeController extends ExpediaController
{

    public function index(){

        $response = $this->setHttpMethod('GET')
        ->setHttpParams('scenario=deal-finder&page=foo&uid=foo&productType=Hotel')
        ->request();


        //print_r($response);
        return view('pages.one',['hotels'=>array(1,2,3,4,5,6,7,8,9)]);

    }


}
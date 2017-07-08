<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends RestController
{
    private $response;

    public function __construct()
    {
        $this->setHttpMethod('GET');
        $this->setHttpParams('scenario=deal-finder&page=foo&uid=foo&productType=Hotel');
        $this->response = $this->request();
    }

    public function index()
    {
        $data = \GuzzleHttp\json_decode($this->response->getBody());
        return view('pages.one',['hotels'=>$data->offers]);
    }
}
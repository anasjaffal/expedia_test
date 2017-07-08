<?php

namespace App\Http\Controllers;


class HomeController extends RestController
{
    private $response;

    public function __construct()
    {
        $this->setHttpMethod('GET');
        $this->response = $this->makeRequest(true);
    }

    public function index()
    {
        $data = $this->getResponse();
        return view('pages.one',['hotels'=>$data->offers]);
    }
}
<?php

namespace App\Http\Controllers;


class HomeController extends RestController
{
    private $response;

    public function __construct()
    {
        $this->setHttpMethod('GET');
    }

    public function index()
    {
        $this->response = $this->makeRequest(true);
        $data = $this->getResponse();
        return view('pages.one',['hotels'=>$data->offers]);
    }
}
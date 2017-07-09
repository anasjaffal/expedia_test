<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends RestController
{

    public function __construct()
    {
        $this->setHttpMethod('GET');
    }

    public function postSearch(Request $request)
    {
        // setting Query Params to prepare the request
        $this->setQueryParams($request);

        // to make a list request and return the response.
        $this->makeRequest(true);
        $data = $this->getResponse();

        // handling empty requests
        if( $data->offers == new \stdClass() || $data == new \stdClass()){
            $resultHotels = null;
        } else{
            $resultHotels = $data->offers;
        }

        return view('pages.one',['hotels'=> $resultHotels, 'searchDetails' => true]);
    }
}
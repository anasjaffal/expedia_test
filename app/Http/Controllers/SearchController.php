<?php
/**
 * Created by PhpStorm.
 * User: ajaffal
 * Date: 7/7/17
 * Time: 6:29 PM
 */

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
        $this->setQueryParams($request);
        $this->makeRequest(true);
        $data = $this->getResponse();

        if( $data == new \stdClass()){
            $resultHotels = null;
        } else{
            $resultHotels = $data->offers;
        }

        return view('pages.one',['hotels'=> $resultHotels, 'searchDetails' => true]);
    }
}
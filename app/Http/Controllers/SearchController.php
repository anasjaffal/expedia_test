<?php
/**
 * Created by PhpStorm.
 * User: ajaffal
 * Date: 7/7/17
 * Time: 6:29 PM
 */

namespace App\Http\Controllers;

use \GuzzleHttp as HttpRequest;
use Illuminate\Http\Request;

class SearchController extends RestController
{
    private $response;

    public function __construct()
    {
        $this->setHttpMethod('GET');
    }

    public function postSearch(Request $request)
    {
        $queryParams = $this->getQueryParams($request);
        $this->setHttpParams('scenario=deal-finder&page=foo&uid=foo&productType=Hotel'.'&'.$queryParams);
        $this->response = $this->request();

        $data = \GuzzleHttp\json_decode($this->response->getBody());

        if( $data->offers == new \stdClass()){
            $resultHotels = null;
        } else{
            $resultHotels = $data->offers;
        }

        return view('pages.one',['hotels'=> $resultHotels, 'searchDetails' => true]);
    }
}
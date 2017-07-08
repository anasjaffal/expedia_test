<?php
/**
 * Created by PhpStorm.
 * User: ajaffal
 * Date: 7/8/17
 * Time: 9:10 PM
 */

namespace App\Http\Controllers;
use \GuzzleHttp as HttpRequest;

class RestController extends Controller
{
    private $host = 'https';
    private $domain = 'offersvc.expedia.com/';
    private $route = 'offers/v2/getOffers?';
    private $params = null;
    private $method = 'GET';

    public function setHttpMethod($method)
    {
        $this->method = $method;
    }

    public function setHttpParams($params)
    {
        $this->params = $params;
    }

    public function request()
    {

        $apiUrl =  $this->buildApiUrl();
        $client = new HttpRequest\Client();
        $res = $client->request($this->method,$apiUrl);

        return $res;

    }

    public function getQueryParams($request)
    {
        $paramsArray = array(
            'destinationName'   => $request->input('destinationName'),
            'minTripStartDate'  => $request->input('dpd1'),
            'maxTripStartDate'  => $request->input('dpd2'),
            'numberOfRoomsLeft' => $request->input('rooms'),
            'minStarRating'     => $request->input('minStarRating'),
        );

        $queryParams = http_build_query($paramsArray);
        return $queryParams;
    }

    private function buildApiUrl()
    {
        return $this->host."://".$this->domain.$this->route.$this->params;

    }
}
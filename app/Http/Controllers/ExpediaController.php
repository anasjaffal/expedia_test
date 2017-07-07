<?php
/**
 * Created by PhpStorm.
 * User: ajaffal
 * Date: 7/7/17
 * Time: 6:29 PM
 */

namespace App\Http\Controllers;

use \GuzzleHttp as HttpRequest;

class ExpediaController extends Controller
{

    private $host = 'https';
    private $domain = 'offersvc.expedia.com/';
    private $route = 'offers/v2/getOffers?';
    private $params = null;
    private $method = 'GET';

    public function setHttpMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setHttpParams($params)
    {
        $this->params = $params;
        return $this;
    }

    public function request(){

        $apiUrl =  $this->buildApiUrl();
        $client = new HttpRequest\Client();
        $res = $client->request($this->method,$apiUrl);
//        echo $res->getStatusCode();
//        // 200
//        echo $res->getHeaderLine('content-type');
//        // 'application/json; charset=utf8'
//        echo $res->getBody();
//        // '{"id": 1420053, "name": "guzzle", ...}'

        return $res;

    }

    private function buildApiUrl()
    {
        return $this->host."://".$this->domain.$this->route.$this->params;

    }
}
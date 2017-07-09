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
    private $params = '';
    private $defaultParams = 'scenario=deal-finder&page=foo&uid=foo&productType=Hotel';
    private $method = 'GET';
    private $response = null;

    /**
     * Set http Method ('GET', 'POST', ...)
     *
     * @param string $method
     */
    public function setHttpMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Preparing the Request param and hit API.
     *
     * @param bool $useDefaultQueryParams
     */
    public function makeRequest($useDefaultQueryParams)
    {
        $apiUrl =  $this->buildApiUrl($useDefaultQueryParams);
        $client = new HttpRequest\Client();
        $this->response = $client->request($this->method,$apiUrl);
    }

    /**
     * Get JSON response.
     *
     * @return Object
     */
    public function getResponse()
    {
        try
        {
            $jsonResponse = \GuzzleHttp\json_decode($this->response->getBody());
            return $jsonResponse;
        }
        catch(\Exception $e)
        {
            return new \stdClass();
        }

    }

    /**
     * Set main query params
     *
     * @param Object $request
     */
    public function setQueryParams($request)
    {
        $paramsArray = array(
            'destinationName'   => $request->input('destinationName'),
            'minTripStartDate'  => $request->input('dpd1'),
            'maxTripStartDate'  => $request->input('dpd2'),
            'numberOfRoomsLeft' => $request->input('rooms'),
            'minStarRating'     => $request->input('minStarRating'),
        );

        $this->params = http_build_query($paramsArray);
    }

    /**
     * Build the query string
     *
     * @param bool $useDefaultQueryParams
     * @return string
     */
    private function buildApiUrl($useDefaultQueryParams)
    {
        if($useDefaultQueryParams)
            return $this->host."://".$this->domain.$this->route.$this->defaultParams.'&'.$this->params;
        else
            return $this->host."://".$this->domain.$this->route.$this->params;

    }
}
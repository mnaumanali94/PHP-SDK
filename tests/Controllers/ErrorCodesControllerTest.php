<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/03/2016
 */

use TesterLib\APIException;
use TesterLib\APIHelper; 
use TesterLib\Models;

class ErrorCodesControllerTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @var \TesterLib\Controllers\ErrorCodesController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new TesterLib\TesterClient();
        self::$controller = $client->getErrorCodes();	
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Todo Add description for test testGet400
     */
    public function testGet400() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->get400();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(400, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 400");

    }

    /**
     * Todo Add description for test testGet500
     */
    public function testGet500() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->get500();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(500, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 500");

    }

}

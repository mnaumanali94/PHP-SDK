<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/01/2016
 */

use TesterLib\APIException;
use TesterLib\APIHelper; 
use TesterLib\Models;

class MEchoControllerTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @var \TesterLib\Controllers\MEchoController Controller instance
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
        self::$controller = $client->getMEcho();	
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Todo Add description for test testJsonEcho
     */
    public function testJsonEcho() {
        // Parameters for the API call
        $input = APIHelper::deserialize('{"uid": "1123213", "name": "Shahid"}');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->jsonEcho($input);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"body": {"uid": "1123213", "name": "Shahid"}}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testFormEcho
     */
    public function testFormEcho() {
        // Parameters for the API call
        $input = APIHelper::deserialize('{"uid": "1123213", "name": "Shahid"}');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->formEcho($input);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"body":{"input":{"uid":"1123213","name":"Shahid"}}}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testQueryEcho
     */
    public function testQueryEcho() {

        // key-value map for optional query parameters
        $queryParams = [];
        $queryParams['hello'] = 'world';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->queryEcho($queryParams);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"query":{"hello":"world"}}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

}

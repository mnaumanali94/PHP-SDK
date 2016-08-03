<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/03/2016
 */

use TesterLib\APIException;
use TesterLib\APIHelper; 
use TesterLib\Models;

class TemplateParamsControllerTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @var \TesterLib\Controllers\TemplateParamsController Controller instance
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
        self::$controller = $client->getTemplateParams();	
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Todo Add description for test testSendStringArray
     */
    public function testSendStringArray() {
        // Parameters for the API call
        $strings = APIHelper::deserialize('["abc", "def"]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendStringArray($strings);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"path":"/abc/def"}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testSendIntegerArray
     */
    public function testSendIntegerArray() {
        // Parameters for the API call
        $integers = APIHelper::deserialize('[1,2,3,4,5]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendIntegerArray($integers);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"path":"/1/2/3/4/5"}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

}

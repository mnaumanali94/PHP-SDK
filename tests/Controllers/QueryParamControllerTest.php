<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/01/2016
 */

use TesterLib\APIException;
use TesterLib\APIHelper; 
use TesterLib\Models;

class QueryParamControllerTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @var \TesterLib\Controllers\QueryParamController Controller instance
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
        self::$controller = $client->getQueryParam();	
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Todo Add description for test testSimpleQuery
     */
    public function testSimpleQuery() {
        // Parameters for the API call
        $boolean = true;
        $number = 4;
        $string = 'TestString';

        // key-value map for optional query parameters
        $queryParams = [];

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->simpleQuery($boolean, $number, $string, $queryParams);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testNoParams
     */
    public function testNoParams() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->noParams();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testStringParam
     */
    public function testStringParam() {
        // Parameters for the API call
        $string = 'l;asd;asdwe[2304&&;\'.d??\\a\\\\\\;sd//';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->stringParam($string);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testUrlParam
     */
    public function testUrlParam() {
        // Parameters for the API call
        $url = 'https://www.shahidisawesome.com/and/also/a/narcissist?thisis=aparameter&another=one';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->urlParam($url);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testMultipleParams
     */
    public function testMultipleParams() {
        // Parameters for the API call
        $number = 123412312;
        $precision = 1112.34;
        $string = '""test./;";12&&3asl"";"qw1&34"///..//.';
        $url = 'http://www.abc.com/test?a=b&c="http://lolol.com?param=no&another=lol"';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->multipleParams($number, $precision, $string, $url);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testNumberArray
     */
    public function testNumberArray() {
        // Parameters for the API call
        $integers = APIHelper::deserialize('[1,2,3,4,5]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->numberArray($integers);
        } catch(APIException $e) {};

 
        // Test response code
        $this->assertGreaterThanOrEqual(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not between 200 and 208");
        $this->assertLessThanOrEqual(208, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not between 200 and 208");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testStringArray
     */
    public function testStringArray() {
        // Parameters for the API call
        $strings = APIHelper::deserialize('["abc", "def"]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->stringArray($strings);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testStringEnumArray
     */
    public function testStringEnumArray() {
        // Parameters for the API call
        $days = APIHelper::deserialize('["Tuesday", "Saturday", "Wednesday", "Monday", "Sunday"]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->stringEnumArray($days);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testIntegerEnumArray
     */
    public function testIntegerEnumArray() {
        // Parameters for the API call
        $suites = APIHelper::deserialize('[1, 3, 4, 2, 3]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->integerEnumArray($suites);
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

}

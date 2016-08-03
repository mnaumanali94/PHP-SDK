<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/03/2016
 */

use TesterLib\APIException;
use TesterLib\APIHelper; 
use TesterLib\Models;

class BodyParamsControllerTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @var \TesterLib\Controllers\BodyParamsController Controller instance
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
        self::$controller = $client->getBodyParams();	
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
        $sarray = APIHelper::deserialize('["abc", "def"]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendStringArray($sarray);
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
                '{"passed":true}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testSendModel
     */
    public function testSendModel() {
        // Parameters for the API call
        $model = APIHelper::deserialize('{"name":"Shahid Khaliq","age":5147483645,"address":"H # 531, S # 20","uid":"123321","salary":20000,"department":"Software Development","joiningDay":"Saturday","workingDays":["Monday","Tuesday","Friday"],"boss":{"name":"Zeeshan Ejaz","age":5147483647,"address":"I-9/1","uid":"241123"},"dependents":[{"name":"Future Wife","age":5147483649,"address":"H # 531, S # 20","uid":"123412"},{"name":"Future Kid","age":5147483648,"address":"H # 531, S # 20","uid":"312341"}]}', new Models\Employee());

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendModel($model);
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
     * Todo Add description for test testSendModelArray
     */
    public function testSendModelArray() {
        // Parameters for the API call
        $models = APIHelper::deserialize('[{"name":"Shahid Khaliq","age":5147483645,"address":"H # 531, S # 20","uid":"123321","salary":20000,"department":"Software Development","joiningDay":"Saturday","workingDays":["Monday","Tuesday","Friday"],"boss":{"name":"Zeeshan Ejaz","age":5147483647,"address":"I-9/1","uid":"241123"},"dependents":[{"name":"Future Wife","age":5147483649,"address":"H # 531, S # 20","uid":"123412"},{"name":"Future Kid","age":5147483648,"address":"H # 531, S # 20","uid":"312341"}]}, {"name":"Shahid Khaliq","age":5147483645,"address":"H # 531, S # 20","uid":"123321","salary":20000,"department":"Software Development","joiningDay":"Saturday","workingDays":["Monday","Tuesday","Friday"],"boss":{"name":"Zeeshan Ejaz","age":5147483647,"address":"I-9/1","uid":"241123"},"dependents":[{"name":"Future Wife","age":5147483649,"address":"H # 531, S # 20","uid":"123412"},{"name":"Future Kid","age":5147483648,"address":"H # 531, S # 20","uid":"312341"}]}]', new Models\Employee(), true);

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendModelArray($models);
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
     * Todo Add description for test testSendDynamic
     */
    public function testSendDynamic() {
        // Parameters for the API call
        $dynamic = APIHelper::deserialize('{"uid": "1123213", "name": "Shahid"}');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendDynamic($dynamic);
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
     * Todo Add description for test testSendStringEnumArray
     */
    public function testSendStringEnumArray() {
        // Parameters for the API call
        $days = APIHelper::deserialize('["Tuesday", "Saturday", "Wednesday", "Monday", "Sunday"]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendStringEnumArray($days);
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
     * Todo Add description for test testSendIntegerEnumArray
     */
    public function testSendIntegerEnumArray() {
        // Parameters for the API call
        $suites = APIHelper::deserialize('[1, 3, 4, 2, 3]');

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->sendIntegerEnumArray($suites);
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

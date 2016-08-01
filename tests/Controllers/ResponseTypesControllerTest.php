<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/01/2016
 */

use TesterLib\APIException;
use TesterLib\APIHelper; 
use TesterLib\Models;

class ResponseTypesControllerTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @var \TesterLib\Controllers\ResponseTypesController Controller instance
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
        self::$controller = $client->getResponseTypes();	
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Todo Add description for test testGetLong
     */
    public function testGetLong() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getLong();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

 
        $this->assertEquals(5147483647, $result,
            "Response does not match expected value");
    }

    /**
     * Todo Add description for test testGetModel
     */
    public function testGetModel() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getModel();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"name":"Shahid Khaliq","age":5147483645,"address":"H # 531, S # 20","uid":"123321","salary":20000,"department":"Software Development","joiningDay":"Saturday","workingDays":["Monday","Tuesday","Friday"],"boss":{"name":"Zeeshan Ejaz","age":5147483647,"address":"I-9/1","uid":"241123"},"dependents":[{"name":"Future Wife","age":5147483649,"address":"H # 531, S # 20","uid":"123412"},{"name":"Future Kid","age":5147483648,"address":"H # 531, S # 20","uid":"312341"}]}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testGetStringEnumArray
     */
    public function testGetStringEnumArray() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getStringEnumArray();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        // Deserialize expected output
        $expected = APIHelper::deserialize(
            '["Tuesday", "Saturday", "Wednesday", "Monday", "Sunday"]'
            );

        $this->assertArraySubset($expected, $result, 
            "Response array does not match in values and size");
    }

    /**
     * Todo Add description for test testGetStringEnum
     */
    public function testGetStringEnum() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getStringEnum();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

 
        $this->assertEquals('Monday', $result,
            "Response does not match expected value");
    }

    /**
     * Todo Add description for test testGetModelArray
     */
    public function testGetModelArray() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getModelArray();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isArrayOfStringifiedJsonObjectsProperSubsetOf(
                '[{"name":"Shahid Khaliq","age":5147483645,"address":"H # 531, S # 20","uid":"123321","salary":20000,"department":"Software Development","joiningDay":"Saturday","workingDays":["Monday","Tuesday","Friday"],"boss":{"name":"Zeeshan Ejaz","age":5147483647,"address":"I-9/1","uid":"241123"},"dependents":[{"name":"Future Wife","age":5147483649,"address":"H # 531, S # 20","uid":"123412"},{"name":"Future Kid","age":5147483648,"address":"H # 531, S # 20","uid":"312341"}]}, {"name":"Shahid Khaliq","age":5147483645,"address":"H # 531, S # 20","uid":"123321","salary":20000,"department":"Software Development","joiningDay":"Saturday","workingDays":["Monday","Tuesday","Friday"],"boss":{"name":"Zeeshan Ejaz","age":5147483647,"address":"I-9/1","uid":"241123"},"dependents":[{"name":"Future Wife","age":5147483649,"address":"H # 531, S # 20","uid":"123412"},{"name":"Future Kid","age":5147483648,"address":"H # 531, S # 20","uid":"312341"}]}]', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
                "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testGetIntEnum
     */
    public function testGetIntEnum() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getIntEnum();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

 
        $this->assertEquals(intval('3'), $result,
            "Response does not match expected value");
    }

    /**
     * Todo Add description for test testGetIntEnumArray
     */
    public function testGetIntEnumArray() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getIntEnumArray();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        // Deserialize expected output
        $expected = APIHelper::deserialize(
            '[1, 3, 4, 2, 3]'
            );

        $this->assertArraySubset($expected, $result, 
            "Response array does not match in values and size");
    }

    /**
     * Todo Add description for test testGetPrecision
     */
    public function testGetPrecision() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getPrecision();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

 
        $this->assertEquals(4.999, $result,
            "Response does not match expected value", ASSERT_PRECISION);
    }

    /**
     * Todo Add description for test testGetBinary
     */
    public function testGetBinary() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getBinary();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertEquals(TestHelper::getFileContents('https://dl.dropboxusercontent.com/u/31838656/binary.png'), $result,
            "Binary result does not match the given file");
    }

    /**
     * Todo Add description for test testGetInteger
     */
    public function testGetInteger() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getInteger();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

 
        $this->assertEquals(4, $result,
            "Response does not match expected value");
    }

    /**
     * Todo Add description for test testGetIntegerArray
     */
    public function testGetIntegerArray() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getIntegerArray();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        // Deserialize expected output
        $expected = APIHelper::deserialize(
            '[1,2,3,4,5]'
            );

        $this->assertArraySubset($expected, $result, 
            "Response array does not match in values and size");
    }

    /**
     * Todo Add description for test testGetDynamic
     */
    public function testGetDynamic() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getDynamic();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"method":"GET","body":{},"uploadCount":0}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testGetDynamicArray
     */
    public function testGetDynamicArray() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getDynamicArray();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        $this->assertTrue(TestHelper::isJsonObjectProperSubsetOf(
                '{"method":"GET","body":{},"uploadCount":0}', 
                $this->httpResponse->getResponse()->getRawBody(), 
                true, true, false),
            "Response body does not match in keys");
    }

    /**
     * Todo Add description for test testGetDatetime
     */
    public function testGetDatetime() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getDatetime();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

 
        $this->assertEquals('2016-03-13T12:52:32.123Z', $result,
            "Response does not match expected value");
    }

    /**
     * Todo Add description for test testGetDatetimeArray
     */
    public function testGetDatetimeArray() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getDatetimeArray();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        // Deserialize expected output
        $expected = APIHelper::deserialize(
            '["2016-03-13T12:52:32.123Z","2016-03-13T12:52:32.123Z","2016-03-13T12:52:32.123Z"]'
            );

        $this->assertArraySubset($expected, $result, 
            "Response array does not match in values and size");
    }

    /**
     * Todo Add description for test testGetBoolean
     */
    public function testGetBoolean() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getBoolean();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

 
        $this->assertEquals(true, $result,
            "Response does not match expected value");
    }

    /**
     * Todo Add description for test testGetBooleanArray
     */
    public function testGetBooleanArray() {

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        	$result = self::$controller->getBooleanArray();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test whether the captured response is as we expected
        $this->assertNotNull($result,
            "Result does not exist");

        // Deserialize expected output
        $expected = APIHelper::deserialize(
            '[true, false, true, true, false]'
            );

        $this->assertArraySubset($expected, $result, 
            "Response array does not match in values and size");
    }

    /**
     * Todo Add description for test testGetHeadersAllowExtra
     */
    public function testGetHeadersAllowExtra() {

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
        self::$controller->getHeaders();
        } catch(APIException $e) {};

        // Test response code
        $this->assertEquals(200, $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200");

        // Test headers
        $headers = [];
        $headers['NauManAli'] = null ;
        $headers['WaseemHasAn'] = 'is also awesome' ;
        
        $this->assertTrue(TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match");

    }

}

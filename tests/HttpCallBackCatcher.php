<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/03/2016
 */

use TesterLib\Http\HttpCallBack;

/**
 * An HTTPCallBack that captures the request and response for use later
 */
class HttpCallBackCatcher extends HttpCallBack {

    /**
     * Http request
     * @var TesterLib\Http\HttpRequest
     */
    private $request;

    /**
     * Http Response
     * @var TesterLib\Http\HttpResponse
     */
    private $response;

    /**
     * Create instance
     */
    public function __construct() {
        $instance = $this;
        parent::__construct(null, function($httpContext) use($instance) {
            $instance->request = $httpContext->getRequest();
            $instance->response = $httpContext->getResponse();
        });
    }

    /**
     * Get the HTTP Request object associated with this API call 
     * @return TesterLib\Http\HttpRequest
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Get the HTTP Response object associated with this API call
     * @return TesterLib\Http\HttpResponse
     */
    public function getResponse() {
        return $this->response;
    }
}

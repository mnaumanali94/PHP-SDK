<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io ) on 08/03/2016
 */

namespace TesterLib;

use TesterLib\Controllers;

/**
 * TesterLib client class
 */
class TesterClient
{
 
    /**
     * Singleton access to ResponseTypes controller
     * @return Controllers\ResponseTypesController The *Singleton* instance
     */
    public function getResponseTypes()
    {
        return Controllers\ResponseTypesController::getInstance();
    }
 
    /**
     * Singleton access to ErrorCodes controller
     * @return Controllers\ErrorCodesController The *Singleton* instance
     */
    public function getErrorCodes()
    {
        return Controllers\ErrorCodesController::getInstance();
    }
 
    /**
     * Singleton access to BodyParams controller
     * @return Controllers\BodyParamsController The *Singleton* instance
     */
    public function getBodyParams()
    {
        return Controllers\BodyParamsController::getInstance();
    }
 
    /**
     * Singleton access to FormParams controller
     * @return Controllers\FormParamsController The *Singleton* instance
     */
    public function getFormParams()
    {
        return Controllers\FormParamsController::getInstance();
    }
 
    /**
     * Singleton access to MEcho controller
     * @return Controllers\MEchoController The *Singleton* instance
     */
    public function getMEcho()
    {
        return Controllers\MEchoController::getInstance();
    }
 
    /**
     * Singleton access to Header controller
     * @return Controllers\HeaderController The *Singleton* instance
     */
    public function getHeader()
    {
        return Controllers\HeaderController::getInstance();
    }
 
    /**
     * Singleton access to QueryParam controller
     * @return Controllers\QueryParamController The *Singleton* instance
     */
    public function getQueryParam()
    {
        return Controllers\QueryParamController::getInstance();
    }
 
    /**
     * Singleton access to TemplateParams controller
     * @return Controllers\TemplateParamsController The *Singleton* instance
     */
    public function getTemplateParams()
    {
        return Controllers\TemplateParamsController::getInstance();
    }
}
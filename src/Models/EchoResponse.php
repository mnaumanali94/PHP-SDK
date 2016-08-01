<?php 
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io ) on 08/01/2016
 */

namespace TesterLib\Models;

use JsonSerializable;

/**
 * Raw http Request info
 */
class EchoResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var array $body public property
     */
    public $body;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $headers public property
     */
    public $headers;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $method public property
     */
    public $method;

    /**
     * relativePath
     * @required
     * @var string $path public property
     */
    public $path;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $query public property
     */
    public $query;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $uploadCount public property
     */
    public $uploadCount;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $body          Initialization value for the property $this->body       
     * @param   array             $headers       Initialization value for the property $this->headers    
     * @param   string            $method        Initialization value for the property $this->method     
     * @param   string            $path          Initialization value for the property $this->path       
     * @param   array             $query         Initialization value for the property $this->query      
     * @param   integer           $uploadCount   Initialization value for the property $this->uploadCount
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->body        = func_get_arg(0);
            $this->headers     = func_get_arg(1);
            $this->method      = func_get_arg(2);
            $this->path        = func_get_arg(3);
            $this->query       = func_get_arg(4);
            $this->uploadCount = func_get_arg(5);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty($name, $value) 
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['body']        = $this->body;
        $json['headers']     = $this->headers;
        $json['method']      = $this->method;
        $json['path']        = $this->path;
        $json['query']       = $this->query;
        $json['uploadCount'] = $this->uploadCount;

        return array_merge($json, $this->additionalProperties);
    }
}
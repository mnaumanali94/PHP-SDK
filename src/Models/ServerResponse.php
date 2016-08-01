<?php 
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io ) on 08/01/2016
 */

namespace TesterLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ServerResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var array $input public property
     */
    public $input;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Message
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $passed public property
     */
    public $passed;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $input     Initialization value for the property $this->input  
     * @param   string            $message   Initialization value for the property $this->message
     * @param   bool              $passed    Initialization value for the property $this->passed 
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->input   = func_get_arg(0);
            $this->message = func_get_arg(1);
            $this->passed  = func_get_arg(2);
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
        $json['input']   = $this->input;
        $json['Message'] = $this->message;
        $json['passed']  = $this->passed;

        return array_merge($json, $this->additionalProperties);
    }
}
<?php 
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 ( https://apimatic.io ) on 08/03/2016
 */

namespace TesterLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Person implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $age public property
     */
    public $age;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $uid public property
     */
    public $uid;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $address   Initialization value for the property $this->address
     * @param   integer           $age       Initialization value for the property $this->age    
     * @param   string            $name      Initialization value for the property $this->name   
     * @param   string            $uid       Initialization value for the property $this->uid    
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->address = func_get_arg(0);
            $this->age     = func_get_arg(1);
            $this->name    = func_get_arg(2);
            $this->uid     = func_get_arg(3);
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
        $json['address'] = $this->address;
        $json['age']     = $this->age;
        $json['name']    = $this->name;
        $json['uid']     = $this->uid;

        return array_merge($json, $this->additionalProperties);
    }
}
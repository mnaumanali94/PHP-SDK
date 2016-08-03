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
class Employee extends Person implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var Person $boss public property
     */
    public $boss;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $department public property
     */
    public $department;

    /**
     * @todo Write general description for this property
     * @required
     * @var Person[] $dependents public property
     */
    public $dependents;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $joiningDay public property
     */
    public $joiningDay;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $salary public property
     */
    public $salary;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $workingDays public property
     */
    public $workingDays;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param   Person            $boss          Initialization value for the property $this->boss       
     * @param   string            $department    Initialization value for the property $this->department 
     * @param   array             $dependents    Initialization value for the property $this->dependents 
     * @param   string            $joiningDay    Initialization value for the property $this->joiningDay 
     * @param   integer           $salary        Initialization value for the property $this->salary     
     * @param   array             $workingDays   Initialization value for the property $this->workingDays
     */
    public function __construct()
    {
        switch(func_num_args())      
        {
            case 6:
                $this->boss        = func_get_arg(0);
                $this->department  = func_get_arg(1);
                $this->dependents  = func_get_arg(2);
                $this->joiningDay  = func_get_arg(3);
                $this->salary      = func_get_arg(4);
                $this->workingDays = func_get_arg(5);
                break;

            default:
                $this->joiningDay = Days::MONDAY;
                break;
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
        $json['boss']        = $this->boss;
        $json['department']  = $this->department;
        $json['dependents']  = $this->dependents;
        $json['joiningDay']  = $this->joiningDay;
        $json['salary']      = $this->salary;
        $json['workingDays'] = $this->workingDays;
        $json = array_merge($json, parent::jsonSerialize());

        return array_merge($json, $this->additionalProperties);
    }
}
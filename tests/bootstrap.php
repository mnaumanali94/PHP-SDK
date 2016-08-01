<?php
/*
 * TesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v2.0 on 08/01/2016
 */

/**
 * Load the composer's autoload file so that we don't have to require files 
 * manually in our code. Also load helper classes for tests.
 */
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/HttpCallBackCatcher.php';
require __DIR__.'/TestHelper.php';

/**
 * Configure Test Constants
 */
define("REQUEST_TIMEOUT", 60);
define("ASSERT_PRECISION", 0.1);

/**
 * Set Configuration parameters for test execution
 */
TesterLib\Configuration::$BASEURI = 'http://apimatic.hopto.org:3000';

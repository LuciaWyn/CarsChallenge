<?php
/**
 * Candidate Assessment
 *
 * @copyright   Copyright (c) 2015 Screenpages Ltd. (http://www.screenpages.com)
 * @email       info@screenpages.com
 * @developer   Dave Farthing
 * @date        24/03/15
 */

/** Setup Environment */
require_once( 'app/bootstrap.php' );



/** @todo  Make more dynamic controller finding - routing? */

$controllers = array(
	'public',
);

/**
 * Run each controller to find route
 */
 
foreach ($controllers as $controller) {
	require 'app/controllers/'.$controller.'.php';
}

$app->run();
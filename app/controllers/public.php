<?php
/**
 * Candidate Assessment
 *
 * @copyright   Copyright (c) 2015 Screenpages Ltd. (http://www.screenpages.com)
 * @email       info@screenpages.com
 * @developer   Dave Farthing
 * @date        24/03/15
 */

/********************************************************************************************************************/
/*     route: /
/********************************************************************************************************************/
$app->get('/', function() use ($app) {
	$app->render("home", array("bodyclass"=>"index home","title" => "Home", "description" => "Home"));
});




/********************************************************************************************************************/
/*     route: /challenge
/********************************************************************************************************************/
$app->get('/challenge', function() use ($app) {
	$app->render("challenge", array("bodyclass"=>"index challenge","title" => "Challenge", "description" => "Challenge Page"));
});




/********************************************************************************************************************/
/*     route: /ajax/loadfixtures
/********************************************************************************************************************/
$app->get('/ajax/loadfixtures', function() use ($app)
{
	$fixtures   = array();
	$fixtures[] = array('round'=>'0','circuitName'=>'Not Yet Implemented','locality'=>'No Where','date'=>'30/01/1970','time'=>'12:00','url'=>'http://en.wikipedia.org/wiki/Formula_One');

	/** @todo Implement retrieval of $fixtures data from Ergast API ( http://ergast.com/api/f1/current.json )*/









	/**----------------*/

	$response = $app->response();
	$response['Content-Type'] = 'application/json';
	$response->status(200);
	$response->body(json_encode($fixtures));
});

<?php
/**
 * Candidate Assessment
 *
 * @copyright   Copyright (c) 2015 Screenpages Ltd. (http://www.screenpages.com)
 * @email       info@screenpages.com
 * @developer   Dave Farthing
 * @date        24/03/15
 */

/**
 * Include Vendor Libraries
 */
require_once dirname(__DIR__).'/vendor/autoload.php';


/**
 * Setup Application Constants
 */
define('ROOT_DIR', getcwd());
define('APP_DIR', ROOT_DIR .'/app');
define('TEMPLATE_DIR', APP_DIR . '/view');

/** Set Aplication Mode (development/production) */
define('APP_MODE', 'development');
error_reporting(E_ALL);



/**
 * Set up autoloader for local classes
 */
spl_autoload_register(function ($className)
{
	$className = ltrim($className, '\\');
	$fileName  = '';
	$namespace = '';

	if ($lastNsPos = strripos($className, '\\')) {
		$namespace = substr($className, 0, $lastNsPos);
		$className = substr($className, $lastNsPos + 1);
		$fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
	}

	$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
	$filePath = APP_DIR.'/models/'.$fileName;

	if (file_exists($filePath)) {
		require_once $filePath;
	}
});



/**
 * Initialise Slim Framework
 */
$app = new \App(array(
'mode' => APP_MODE,
'view' => new \View(),
'templates.path' => TEMPLATE_DIR
));

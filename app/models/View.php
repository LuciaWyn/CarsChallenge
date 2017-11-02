<?php
/**
 * Candidate Assessment
 *
 * @copyright   Copyright (c) 2015 Screenpages Ltd. (http://www.screenpages.com)
 * @email       info@screenpages.com
 * @developer   Dave Farthing
 * @date        24/03/15
 */

class View extends \Slim\View
{
	/**
	 * Render template
	 *
	 * @param string $template
	 * @param null $data
	 *
	 * @return string
	 */
	public function render($template, $data = null)
	{
		$template .= '.php';
		return parent::render($template, $data = null);
	}


	/**
	 * Get Application Instance
	 *
	 * @return null|\Slim\Slim
	 */
	public function app()
	{
		return \Slim\Slim::getInstance();
	}

	/**
	 * Get Request
	 *
	 * @return \Slim\Http\Request
	 */
	public function request()
	{
		return self::app()->request;
	}
}
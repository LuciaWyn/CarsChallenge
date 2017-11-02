<?php
/**
 * Candidate Assessment
 *
 * @copyright   Copyright (c) 2015 Screenpages Ltd. (http://www.screenpages.com)
 * @email       info@screenpages.com
 * @developer   Dave Farthing
 * @date        24/03/15
 */

class App extends \Slim\Slim{

	protected $_registry = array();


	/**
	 * Store data in application registry
	 *
	 * @param $key
	 * @param $data
	 *
	 * @return $this
	 */
	public function register($key, $data){
		$this->_registry[$key] = $data;
		return $this;
	}


	/**
	 * Retrieve data from application registry
	 *
	 * @param $key
	 *
	 * @return mixed
	 */
	public function registry($key){
		if(isset($this->_registry[$key])){
			return $this->_registry[$key];
		}
		return false;
	}
}

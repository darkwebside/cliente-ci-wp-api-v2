<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Peticiones_api
 *
 * @author darkwebside
 */
class Peticiones_api extends CI_Model {

	private $_url = "http://removagalume.com/wp-json/wp/v2/";
	private $_Id = "9Bzq3of8xvYLU107NpgXAVXJ2ReQzy";
	private $_secret = "MU096voZlXKnzaC9AUVcUgtdDj7LLe";

	public function __construct() {
		// Call the CI_Model constructor
		parent::__construct();
		require 'vendor/autoload.php';
		Requests::register_autoloader();
	}

	public function get( $urlparams, $options = array() ) {

		$request = Requests::get( $this->_url . $urlparams, $options );
		return $request;
	}

}

<?php

/**
 *  UTF-8
 *
 *  Class Inicio description
 *
 *  File Inicio.php creado en 02-dic-2015/{$time}
 *
 *  @autor: darkwebside
 *
 *
 * */
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );

class Inicio extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$content = $this->load->view( 'welcome_message', null, true );
		$this->render( $content );
		// Habilitamos profiler
		$this->load->view( 'profiler' );
		$this->output->enable_profiler( TRUE );
	}

}

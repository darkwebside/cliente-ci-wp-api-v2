<?php

if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );

class MY_Controller extends CI_Controller {

	protected $layout = 'layout';
	// El orden es importante en los dos arrays de abajo, debido a que la carga se hace de forma ordenada
	protected $stylesheets = array( 'bootstrap.min.css', 'color.css', 'style.css', 'font-awesome.min.css' );
	protected $javascripts = array( 'jquery.js', 'jquery.dlmenu.js', 'modernizr.custom.js', 'bootstrap.min.js', 'jquery.smooth-scroll.min.js', 'wow.min.js', 'custom.js', );

	protected function render( $content ) {
		$this->load->helper( "assets_helper" );
		$view_data = array( 'content' => $content,
			'stylesheets' => $this->get_stylesheets(),
			'javascripts' => $this->get_javascripts()
		);

		$this->load->view( $this->layout, $view_data );
	}

	protected function get_stylesheets() {
		return assets_css( $this->stylesheets );
	}

	protected function get_javascripts() {
		return assets_js( $this->javascripts );
	}

}

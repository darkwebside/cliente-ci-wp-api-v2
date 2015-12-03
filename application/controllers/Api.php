<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api
 *
 * @author darkwebside
 */
class Api extends MY_Controller {

	public function Index() {

		$this->load->model( 'peticiones_api' );
		//$options = array( 'Accept' => 'application/json' );
		$query = 'evento';

		$respuesta_json = $this->peticiones_api->get( $query );
		//var_dump( $respuesta );
		//$data = json_decode( $respuesta ), true );
		//var_dump(  );

		$datas = json_decode( $respuesta_json->body );

		foreach ( $datas as $item ) {
			echo '<pre>';
			var_dump( $item );
			$contenido = $item->content->rendered;
			echo( $contenido );
			echo ("<br>___________________________________<br>");
			echo '</pre>';
		}








		/* foreach ( $respuesta as $resp ) {
		  //var_dump( $resp );

		  //json_decode( $resp->value );
		  } */

		//$respuesta_decoded = json_decode( $respuesta );
	}

}

<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view( 'head_view' ); ?>
		<!-- in the <head> .. -->
		<?= $stylesheets ?>
	</head>
	<body>
		<!-- menu area -->
		<?$this->load->view( 'menu_view' );?>
		<!-- intro area -->
		<?$this->load->view( 'intro_view' );?>
		<!-- About -->
		<?$this->load->view( 'about_view' );?>
		<!-- spacer1 -->
		<?$this->load->view( 'spacer_view' );?>
		<!-- Services -->
		<?$this->load->view( 'services_view' );?>
		<!-- Aquí el contenido dínamico de content -->
		<?= $content ?>
		<!-- Trabajos -->
		<?$this->load->view( 'trabajos_view' );?>

		<!-- spacer2 -->
		<?$this->load->view( 'spacer2_view' );?>
		<!-- Contact -->
		<?$this->load->view( 'contact_view' );?>
		<!-- Footer -->
		<?$this->load->view( 'footer_view' );?>

		<?= $javascripts; ?>
	</body>
</html>
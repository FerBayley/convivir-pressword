<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name');?><?php wp_title();?></title>
	<meta name="description" content="">
	<!-- CSS -->
	<link href="<?php bloginfo('template_directory')?>/css/normalize.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php bloginfo('template_directory')?>/css/estilos.css" rel="stylesheet" type="text/css" media="screen" />
	<!-- CSS -->

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<!-- VIEWPORT -->

	<!-- JS -->
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="js/responsivemobilemenu.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.30542.js"></script>
	<!-- JS -->

	<!-- FAVICON -->
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- FAVICON -->

	<!-- Comienza el codigo de Google Analytics -->
    <!-- Final del codigo de Google Analytics -->

	<!--[if lt IE 9]>
    	<script src="components/html5shiv/html5shiv.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
  	<?php wp_footer(); ?>

</head>
<?php get_header(); ?>

<body>

	<section class="Contenedor-principal">
		
		<header>
			<section class="List">
				<!-- MENU PREHEADER -->
                <?php include('menu-preheader.php') ?>
            	<!-- FIN MENU PREHEADER -->
			</section> <!-- End of List -->

			<section class="Redes-header">
				<ul>
					<li>
						<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/facebook-preheader.png" alt="Seguinos en Facebook" /></a>
					</li>
					<li>
						<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/twitter-preheader.png" alt="Seguinos en Twitter" /></a>
					</li>
					<li>
						<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/email-preheader.png" alt="Contactanos via email" /></a>
					</li>
				</ul>
			</section> <!-- End of Redes-header -->
			<div class="Clear"></div>
		</header> <!-- End of header -->


		<section class="Sub-header">
			<section class="Logo">
				<hgroup>
					<a href="#"><h1><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="Logo ConvivirPress"></h1></a>
				</hgroup>
			</section> <!-- End of Logo -->

			<section class="Banner">
				<figure><img src="<?php bloginfo('template_directory'); ?>/img/banners/big-header.jpg" alt="Banner ConvivirPress" /></figure>
			</section> <!-- End of Banner -->
		</section> <!-- End of Sub-header -->

		<nav class="Barra">
			<!-- MENU -->
                <?php include('menu.php') ?>
            <!-- FIN MENU -->
		</nav> <!-- End of Barra -->

		<section class="Contenido-plantilla">
			
			<div class="col1">
				col1
			</div> <!-- End of col1 -->

			<div class="col2">
				col2
			</div> <!-- End of col2 -->

		</section> <!-- End of Contenido-plantilla -->

<?php get_footer(); ?>
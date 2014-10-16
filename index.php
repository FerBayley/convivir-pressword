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
					<a href="#">
						<h1><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt="Logo ConvivirPress"></h1>
					</a>
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

		<section class="Contenedor-cols1">
			<!-- COL1 -->
                <?php include('col1.php') ?>
            <!-- FIN COL1 -->

            <!-- COL2 -->
                <?php include('col2.php') ?>
            <!-- FIN COL2 -->

            <!-- COL3 -->
                <?php include('col3.php') ?>
            <!-- FIN COL3 -->

            <!-- COL4 -->
                <?php include('col4.php') ?>
            <!-- FIN COL4 -->
		</section> <!-- End of Contenedor-cols1 -->

		<section class="Contenedor-cols2">			
			<!-- ALIMENTACION -->
                <?php include('alimentacion.php') ?>
            <!-- ALIMENTACION -->

            <!-- ASTROLOGIA -->
                <?php include('astrologia.php') ?>
            <!-- ASTROLOGIA -->

			</div> <!-- end of col2a -->

			<!-- COL2B -->
                <?php include('col2b.php') ?>
            <!-- COL2B -->
			
			</div> <!-- End of col2b -->

			<div class="col2c">
				<section class="Banners-medios">
					<figure><img src="<?php bloginfo('template_directory'); ?>/img/banners/set-banners-1.jpg" alt=""></figure>
				</section>

				<section class="Banners-medios">
					<figure><img src="<?php bloginfo('template_directory'); ?>/img/banners/set-banners-2.jpg" alt=""></figure>
				</section>
			</div> <!-- End of col2c -->
		</section> <!-- End of Contenedor-cols2 -->


		<section class="Contenedor-cols3">
			
			<!-- COL3A -->
                <?php include('col3a.php') ?>
            <!-- COL3A -->

            <!-- COL3B -->
                <?php include('col3b.php') ?>
            <!-- COL3B -->			

			<div class="col3c">
				<section class="Banners-medios">
					<figure><img src="<?php bloginfo('template_directory'); ?>/img/banners/set-banners-1.jpg" alt=""></figure>
				</section>
			</div> <!-- End of col3c -->
		</section> <!-- End of Contenedor-cols3 -->


		<section class="Contenedor-cols4">
			<!-- COL4A -->
                <?php include('col4a.php') ?>
            <!-- COL4A -->	

            <!-- COL3B-->
                <?php include('col4b.php') ?>
            <!-- COL3B -->

			<div class="col3c">
				<section class="Banners-medios">
					<figure><img src="<?php bloginfo('template_directory'); ?>/img/banners/set-banners-1.jpg" alt=""></figure>
				</section>
			</div> <!-- End of col3c -->
		</section> <!-- End of Contenedor-cols4 -->


		<section class="Contenedor-cols5">
			
			<!-- COL5A-->
               	<?php include('col5a.php') ?>
            <!-- COL5A -->

			<div class="col5b">
				<figure><img src="<?php bloginfo('template_directory'); ?>/img/mini1.jpg" alt=""></figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#">ver mas+</a>
				<div class="Clear"></div>
				<section class="Linea"></section> <!-- End of Linea -->

				<figure><img src="<?php bloginfo('template_directory'); ?>/img/mini2.jpg" alt=""></figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#">ver mas+</a>
				<div class="Clear"></div>
				<section class="Linea"></section> <!-- End of Linea -->

				<figure><img src="<?php bloginfo('template_directory'); ?>/img/mini3.jpg" alt=""></figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#">ver mas+</a>
				<div class="Clear"></div>
				<section class="Linea"></section> <!-- End of Linea -->

				<figure><img src="<?php bloginfo('template_directory'); ?>/img/mini4.jpg" alt=""></figure>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<a href="#">ver mas+</a>
				<div class="Clear"></div>
			</div> <!-- End of col3b -->

			<div class="col5c">
				<section class="Banners-medios">
					<figure><img src="<?php bloginfo('template_directory'); ?>/img/banners/set-banners-1.jpg" alt=""></figure>
				</section>
			</div> <!-- End of col3c -->
		</section> <!-- End of Contenedor-cols4 -->

<footer>
	<div class="Copy-footer">
		<h6>Todos los derechos reservados &copy2014 - <a href="mailto:info@convivirpress.com">info@convivirpress.com</a></h6>	
	</div> <!-- End of Copy-footer -->
</footer>

</section> <!-- End of Contenedor-principal -->
	
</body>
</html>
		
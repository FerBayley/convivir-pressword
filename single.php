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
				<section class="Noticia-principal">
				<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
				
				<article>
					<figure>
						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
							</a>
						</div> <!-- End of thumb -->
					</figure>
					
					<h2><?php the_title(); ?></h2>
					<br />
					<div class="date"><?php the_date(); ?></div>
					<div class="extract"><?php the_content(); ?></div>
					<div class="Clear"></div>
				</article>

				<?php endwhile; else: ?>					
				<h1>No se encontraron articulos</h1>
				<?php endif; ?>
				</section> <!-- End of Noticia-principal -->
			</div> <!-- End of col1 -->

			<div class="col2">
				col2
			</div> <!-- End of col2 -->

		</section> <!-- End of Contenido-plantilla -->

<?php get_footer(); ?>
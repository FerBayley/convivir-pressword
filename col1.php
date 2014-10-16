<div class="col1">
	<div class="Caja">
		<h3>ULTIMA NOTICIA</h3>
	</div> <!-- End of Caja -->
	
	<section class="Noticia-principal">
		<?php query_posts("paged=$paged"); ?>
		<?php query_posts('category_name=ultima-noticia&showposts=1'); ?>
		<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
				
		<article>
			<figure>
				<div class="thumb">
					<a href="<?php the_permalink(); ?>">
						<?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
					</a>
				</div> <!-- End of thumb -->
			</figure>

			<div class="extract"><?php the_excerpt(); ?></div>
			<div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>
		</article>

		<?php endwhile; else: ?>					
		<h1>No se encontraron articulos</h1>
		<?php endif; ?>
		</section> <!-- End of Noticia-principal -->

		<section class="Set-banners">
			<img src="<?php bloginfo('template_directory'); ?>/img/banners/set-banners-1.jpg" alt="">
		</section> <!-- End of Set-banners -->
</div> <!-- End of col1 -->
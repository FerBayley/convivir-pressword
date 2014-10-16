<div class="Caja-label">
	<h3>ASTROLOGIA / <a href="#">VER TODAS</a></h3> 
</div> <!-- End of Caja -->

<section class="Caja-astrologia">
		<?php query_posts("paged=$paged"); ?>
		<?php query_posts('category_name=astrologia&showposts=5'); ?>
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
		<div class="Clear"></div>
</section> <!-- End of Caja-astrologia -->
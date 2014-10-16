<div class="col2">
	<div class="Caja">
		<h3>VARIAS</h3>
	</div> <!-- End of Caja -->	

	<section class="Cuadrados">
		<?php query_posts('category_name=varias&showposts=2'); ?>
		<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
		<figure>
			<div class="thumb">
				<a href="<?php the_permalink(); ?>">
					<?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
				</a>
			</div> <!-- End of thumb -->
		</figure>

		<h2><?php the_title(); ?></h2>
		<div class="extract"><?php the_excerpt(); ?></div>
		<div class="date"><?php the_date(); ?> en <span><?php the_category(); ?></span></div>

		<?php endwhile; else: ?>					
		<h1>No se encontraron articulos</h1>
		<?php endif; ?>

	</section> <!-- End of -->
</div> <!-- End of col2 -->
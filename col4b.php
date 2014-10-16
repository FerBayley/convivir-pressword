<div class="col3b">
	
	<?php query_posts("paged=$paged"); ?>
	<?php query_posts('category_name=breves-viaje&showposts=5'); ?>
	<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>


	<article>
		<figure>
			<div class="thumb">
				<a href="<?php the_permalink(); ?>">
				<?php if (has_post_thumbnail() ) { the_post_thumbnail( 'breves-terapias' ); } ?>
				</a>
			</div> <!-- End of thumb -->
		</figure>
		
		<h2><?php the_title(); ?></h2>
		<div class="extract"><?php the_excerpt(); ?></div>
		<div class="Clear"></div>
	</article>


	<?php endwhile; else: ?>					
		<h1>No se encontraron articulos</h1>
	<?php endif; ?>
	<section class="Linea"></section> <!-- End of Linea -->
</div> <!-- End of col3b -->
<?php get_header(); ?>

<section id="main">
	

				<?php if(have_posts() ): while( have_posts() ): the_post(); ?>

				<article>
					<?php the_content(); ?>
				</article>


				<?php endwhile; else: ?>
				
				<?php endif; ?>



</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>

<article class="col span_8">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <?php the_title(); ?>
	    <?php the_excerpt(); ?>                
	<?php endwhile; else: ?>
	    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	<section class="readmore">
		<p class="readmore"><a href="<?php the_permalink();?>">Read more</a></p>
	</section>
</article>

<aside role="complimentary" class="col span_4">

	<?php get_sidebar(); ?>

</aside>

<?php get_footer(); ?>
<?php get_header(); ?>

<article class="col span_8">
	<h1>Search Results</h1>		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
		<?php the_excerpt();?>
	<?php endwhile; ?><?php else : ?>			
		<p>No posts found. Try a different search?</p>
		<?php get_search_form(); ?>			
	<?php endif; ?>
</article>

<aside role="complimentary" class="col span_4">

	<?php get_sidebar(); ?>

</aside>

<?php get_footer(); ?>


<?php get_header(); ?>

<article class="col span_8">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>                
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</article>

	

<?php get_footer(); ?>
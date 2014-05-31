<?php get_header(); ?>

<article class="col span_8">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>                
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>

</article>

<aside role="complimentary" class="col span_4">

	<?php get_sidebar(); ?>

</aside>

<?php get_footer(); ?>
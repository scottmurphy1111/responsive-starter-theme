<?php get_header(); ?>

<article class="col span_8">
	
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<header>
		<h2 class="red page-title"><?php the_title();?></h2>
</header>
<section class="the-article-content">
	<?php the_content();?>
</section>
<?php endwhile; ?>

<footer class="the-comments">		
	<?php comments_template(); ?>
</footer>

</article>

<aside role="complimentary" class="col span_4">

	<?php get_sidebar(); ?>

</aside>	

<?php get_footer(); ?>
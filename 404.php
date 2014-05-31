<?php get_header(); ?>

<article id="404-message" class="col span_8">	
	<header>
		<h1 class="red">Oops...</h1>
	</header>
	<section class="the-404-content">
		<p>We can't seem to find the page you were looking for you. Take a moment and search:</p>
		<?php get_search_form(); ?>
	</section>
</article>

<aside role="complimentary" class="col span_4">

	<?php get_sidebar(); ?>

</aside>

<?php get_footer(); ?>
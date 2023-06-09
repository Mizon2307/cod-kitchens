<?php
// The template for displaying search results pages
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<h1>Search results for: <?php echo get_search_query(); ?></h1>

		<?php	while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content', 'search' ); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'partials/content', 'none' ); ?>

	<?php endif; ?>

<?php get_footer();

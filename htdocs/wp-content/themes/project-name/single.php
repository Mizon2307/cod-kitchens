<?php
// The template for displaying all single posts
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/content', get_post_type() ); ?>

		<?php the_post_navigation(); ?>

	<?php endwhile;	?>

<?php get_footer();

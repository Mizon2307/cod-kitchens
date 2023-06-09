<?php
// The main template file
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content', get_post_type() ); ?>

		<?php endwhile;	?>

	<?php endif; ?>

<?php get_footer();

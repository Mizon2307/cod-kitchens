<?php
// The template for displaying archive pages
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<h1><?php the_archive_title(); ?></h1>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/content', get_post_type() ); ?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'partials/content', 'none' ); ?>

	<?php endif; ?>

<?php get_footer();

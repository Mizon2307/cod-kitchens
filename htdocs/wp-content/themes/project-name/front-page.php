<?php
// The template for displaying the front page
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/content', 'page' ); ?>

	<?php endwhile;	?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php if ( have_rows('blocks') ) : ?>

			<?php while ( have_rows('blocks') ) : the_row(); ?>

				<?php
					$block = get_row_layout();
					$block = str_replace('_', '-', $block);
					$file = get_template_directory() . '/blocks/' . $block . '.php';
				?>

				<?php if ( file_exists($file) ) : ?>

					<?php include($file); ?>

				<?php endif; ?>

			<?php endwhile; ?>

		<?php endif; ?>

	<?php endwhile;	?>

<?php get_footer();

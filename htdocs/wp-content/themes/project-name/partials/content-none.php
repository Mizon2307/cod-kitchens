<?php
// Template part for displaying a message that posts cannot be found
?>

<section>

	<h1>Nothing found</h1>

	<?php if ( is_search() ) : ?>

		<p>No matches were found</p>

		<?php get_search_form(); ?>

	<?php else : ?>

		<?php get_search_form(); ?>
		
	<?php endif; ?>

</section>

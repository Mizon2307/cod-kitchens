<?php
// Template part for displaying results in search pages
?>

<?php
	$title = get_the_title();
	$permalink = get_the_permalink();
	$excerpt = get_the_excerpt();
?>

<article>
	
	<h3>
		<a href="<?php echo $permalink; ?>">
			<?php echo $title; ?>
		</a>
	</h3>

	<div>
		<?php echo $excerpt; ?>
	</div>
	
</article>

<?php
// Template part for displaying posts
?>

<?php
	$title = get_the_title();
	$permalink = get_the_permalink();
	$category = get_the_category()[0];
	$category_name = $category->name;
	$category_slug = $category->slug;
	$category_link = get_category_link($category->cat_ID);
	$author = get_the_author();
	$date = get_the_date();
	$content = get_the_content();
	$excerpt = get_the_excerpt();
?>

<?php if ( is_singular() ) : ?>
	
	<article>

		<h3>
			<a href="<?php echo $permalink; ?>">
				<?php echo $title; ?>
			</a>
		</h3>

		<p>
			Category: <a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
		</p>

		<p>
			Author: <?php echo $author; ?>
		</p>

		<p>
			Date: <?php echo $date; ?>
		</p>

		<div>
			<?php echo $content; ?>
		</div>
		
	</article>

<?php else : ?>
	
	<article>

		<h3>
			<a href="<?php echo $permalink; ?>">
				<?php echo $title; ?>
			</a>
		</h3>

		<p>
			Category: <a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
		</p>

		<p>
			Author: <?php echo $author; ?>
		</p>

		<p>
			Date: <?php echo $date; ?>
		</p>

		<div>
			<?php echo $excerpt; ?>
		</div>
		
	</article>

<?php endif; ?>

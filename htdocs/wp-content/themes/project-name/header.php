<?php
// The header for our theme
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>

	<a class="sr-only focus:not-sr-only" href="#content">Skip to content</a>

	<?php
		$menu = wp_get_menu_array('primary');
	?>

	<header>

		<a href="/" rel="home">
			<?php echo bloginfo('name'); ?>
		</a>

		<nav>
			<?php	foreach ( $menu as $item ) : ?>
				<a href="<?php echo $item['url']; ?>" class="<?php echo $item['current'] ? 'underline' : ''; ?>">
					<?php echo $item['title']; ?>
				</a>
			<?php endforeach; ?>
		</nav>

	</header>
	
	<main id="content">


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>WP Hierarchy</title>
</head>
<body <?php body_class(); ?> >
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<?php wp_nav_menu([
			'theme-location' => 'main-menu'
		]); ?>
	</nav>

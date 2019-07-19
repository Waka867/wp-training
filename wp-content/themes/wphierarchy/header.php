
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>WP Hierarchy</title>
</head>
<body <?php body_class(); ?> >

	<div id="page">

		<a href="#content" class="skip-link screen-reader-text">
			<?php esc_html_e( 'Skip to content', 'wphierarchy' ); ?>
		</a>
		

		<header id="masthead" class="site-header" role="banner">

			<div>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ) ;?>"><?php bloginfo( 'name' ); ?></a>
				</p>
				<p class="site-description">
					<a href="<?php echo esc_url( home_url( '/' ) ) ;?>"><?php bloginfo( 'description' ); ?></a>
				</p>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu([
					'theme-location' => 'main-menu'
				]); ?>
			</nav>
		</header>


		<div id="content" class="site-content">


 



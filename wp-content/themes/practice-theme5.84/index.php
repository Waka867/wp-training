<?php get_header(); ?>


	<body>

<?php

	if( have_posts() ){

		while( have_posts() ) {
			the_post();

			the_content();
		}
	} else {
		// Add what happens if no posts found
	}

?>

	</body>

<?php get_footer(); ?>

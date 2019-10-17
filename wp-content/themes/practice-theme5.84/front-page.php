<?php get_header(); ?>



<div class='site-content container'>
<?php

	if( have_posts() ){

		if( !is_active_sidebar( 'main-sidebar' ) ){
			echo '<div class="row">';
			echo '<div class="col-md-12">';
			echo '<article id="primary post-' . get_the_ID() . '"';
			echo post_class() . '>';

		while( have_posts() ) {
				the_post();

				//echo '<a href="' . get_permalink() . '"><h2>' . the_title() . '</h2></a>';
				echo '<a href="';
				the_permalink();
				echo '">';
				echo '<h2><strong>';
				the_title();
				echo '</strong></h2></a>';

				the_content();
				// Replace some of this code with a page template
		}

			echo '</article></div></div>';
		} else {
			echo '<div class="row">';
			echo '<div class="col-md-10">';
			echo '<article id="primary post-' . get_the_ID() . '"';
			echo post_class() . '>';

		while( have_posts() ) {
				the_post();

				//echo '<a href="' . get_permalink() . '"><h2>' . the_title() . '</h2></a>';
				echo '<a href="';
				the_permalink();
				echo '">';
				echo '<h2><strong>';
				the_title();
				echo '</strong></h2></a>';

				the_content();
				// Replace some of this code with a page template
		}

		echo '</article></div>';
		echo'<div class="col-md-2">';
		dynamic_sidebar('main-sidebar');
		echo "</div>";

		echo '</div>';


		}

	} else {
?>
		<!--Add what happens if no posts found-->
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php
	}


	// get_sidebar();

?>
	<br><br><p>front-page.php</p>

</div>



<?php get_footer(); ?>

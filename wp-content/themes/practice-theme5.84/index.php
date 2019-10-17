<?php get_header(); ?>



<div class='site-content container'>
<?php

	if( have_posts() ){

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

		echo '</article>';

	} else {
?>
		<!--Add what happens if no posts found-->
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php
	}


	get_sidebar();

?>
	<p>index.php</p>

</div>


<?php get_footer(); ?>

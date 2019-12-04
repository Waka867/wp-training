<?php 


get_header(); 

//This is where we utilize a template part to display the site title banner
echo get_template_part('template-parts/site-banner');

?>


<div class='container site-content'>
<?php

	if( have_posts() ){
?>
		
		<!-- Display page title -->
		<a href="<?php the_permalink()?>" title="<?php the_title_attribute() ?>">
			<h1><strong> <?php the_title() ?></strong></h1>
		</a>

<?php

		if( !is_active_sidebar( 'main-sidebar' ) ){
			
			
			echo '<div class="row">';
			echo '<div class="col-md-12">';
			echo '<article id="primary post-' . get_the_ID() . '"';
			echo post_class() . '>';

			while( have_posts() ) {
				the_post();
				
				
				// Adds feature image/post thumbnail if present
				if( has_post_thumbnail() ){
					//the_post_thumbnail( 'full', ['title' => get_the_title()] );
					the_post_thumbnail();
				}


				echo "<section>";
			       	echo the_content();
				echo "</section>";
				// Replace some of this code with a page template
				
				//Edit link
				echo edit_post_link();
			}

			
			
			echo '</article></div></div>';

		} else {
			echo '<div class="row">';
			echo '<div class="col-md-10">';
			echo '<article id="primary post-' . get_the_ID() . '"';
			echo post_class() . '>';

			while( have_posts() ) {
				the_post();

				
				// Adds feature image/post thumbnail if present
				if( has_post_thumbnail() ){
					//the_post_thumbnail( 'full', ['title' => get_the_title()] );
					the_post_thumbnail();
				}



				echo "<section>";
			       	echo the_content();
				echo "</section>";
				// Replace some of this code with a page template
				
				//Edit link
				echo edit_post_link();
			}

		echo '</article></div>';
		echo'<div class="col-md-2">';
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
	<br><br><p>front-page.php derp</p>

</div>



<?php get_footer(); ?>

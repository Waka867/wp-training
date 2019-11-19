<?php get_header(); ?>

<!-- <div class='site-content container'>

	<article id="p" class="row">
		<div class="col-md-12">
			<h1 style="text-align: center; font-size: 3em;">Whoops! It's a 404!</h1>
			<img style="width: 50%; display: block; margin: 5% auto 0 auto;" src="https://media.giphy.com/media/Beyusevd47X7W/giphy.gif">
		</div>
	</article>

	<article id="" class="row" style="text-align: center;">
		<div class="col-md-12">
			<h1>Sorry, the page you are looking for could not be found</h1>
			<?php	//get_search_form(); 	//get_sidebar(); ?>
		</div>
	</article>

</div> -->

<div class='container site-content' class="row">
  <div class="col-md-12">
  <?php

	if( have_posts() ){


		echo '<article id="post-' . get_the_ID() . '" class="col-md-12" style="text-align: center;"';
		echo post_class() . '>';

		while( have_posts() ) {
				the_post();

				echo '<a href="';
				the_permalink();
				echo '">';
				echo '<h2><strong>';
				the_title();
				echo '</strong></h2></a>';

				the_content();

		}

		echo "<p class='prev-posts'>" . previous_post_link() . "</p>";
		echo "<p class='next-posts'>" . next_post_link() . "</p>";

		echo '</article></div>';

	}


	//get_sidebar();

?>
<br><p>single.php</p>

</div>



<?php get_footer(); ?>

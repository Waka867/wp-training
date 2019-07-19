
<?php get_header(); ?>


  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php

        if( have_posts() ) {
          while( have_posts() ){
            the_post();

            // Gets article/content structure for content that goes in THE LOOP
            get_template_part( '/template-parts/content', 'posts');

            }
          } else {

            // Gets article/content-none structure for 404 page in THE LOOP
            get_template_part( '/template-parts/content', 'none');

          }

	?>

	<?php echo paginate_links();  ?>

        <p>Home.php</p>

      </main>
    <?php get_sidebar(); ?>
  </div>


<?php get_footer(); ?>

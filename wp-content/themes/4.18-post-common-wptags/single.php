<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>


          <header class="entry-header">

            <?php if( !is_attachment() ){

              // echo the_title( '<h2><a href="' . get_the_permalink() . '" title="' . the_title_attribute() . '">', '</a></h2>' );
              echo the_title( '<h2><a href="' . get_the_permalink() . '">', '</a></h2>' );

            } ?>

            <?php get_template_part( 'template-parts/byline' ); ?>

          </header>

          <div class="entry-content">

            <?php the_content(); ?>

          </div>

        </article>

      <?php endwhile; endif; ?>

    </main>

    <p>single.php</p>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>

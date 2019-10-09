<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">

            <h2>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>

            <?php get_template_part( 'template-parts/byline' ); ?>

          </header>

          <div class="entry-content">

            <?php the_content(); ?>

          </div>

        </article>

      <?php endwhile; endif; ?>

    </main>

    <p>Page.php</p>

    <?php
    // var_export( get_post_meta( $post->ID ) );

    if( 2 < get_post_meta( $post->ID ) ) {
      esc_html_e( 'The Meta:', 'wp-training');

      the_meta();

      echo get_post_meta( $post->ID, 'Location', true );
    }
    ?>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>

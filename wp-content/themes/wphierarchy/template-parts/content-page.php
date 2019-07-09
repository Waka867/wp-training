<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
  <header class="entry-header">

    <h1><?php the_title(); ?></h1>

    <div class="byline">
        <?php esc_html_e( 'Author: ' ); the_author(); ?>
    </div>

  </header>

  <div class="entry-content">

    <?php the_content(); ?>

  </div>
</article>

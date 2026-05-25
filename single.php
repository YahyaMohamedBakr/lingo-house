<?php get_header(); ?>

  <section class="page-hero">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <section class="entry-content">
    <div class="container" style="max-width:800px;">
      <?php
      while ( have_posts() ) : the_post();
          the_content();
          wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lingo-house' ),
              'after'  => '</div>',
          ) );
      endwhile;
      ?>
    </div>
  </section>

<?php get_footer(); ?>

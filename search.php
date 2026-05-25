<?php get_header(); ?>

  <section class="page-hero">
    <div class="container">
      <h1><?php printf( esc_html__( 'Search Results for: %s', 'lingo-house' ), get_search_query() ); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <section class="news-section" style="padding-top:40px">
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <div class="news-grid">
          <?php
          $d = 0.05;
          while ( have_posts() ) : the_post(); ?>
            <article class="news-card anim" style="transition-delay:<?php echo esc_attr( $d ); ?>s">
              <div class="news-img n-teal">
                <div class="placeholder">📰</div>
                <div class="date-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> <?php echo get_the_date( 'M j, Y' ); ?></div>
              </div>
              <div class="news-body">
                <h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20 ); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
              </div>
            </article>
              <?php
              $d += 0.05;
          endwhile;
          ?>
        </div>
      <?php else : ?>
        <div style="text-align:center;padding:60px 20px;">
          <div style="font-size:48px;margin-bottom:16px;">🔍</div>
          <h3 style="font-size:20px;color:var(--navy);margin-bottom:8px;"><?php esc_html_e( 'No results found', 'lingo-house' ); ?></h3>
          <p style="color:var(--text-secondary);margin-bottom:24px;"><?php esc_html_e( 'Sorry, nothing matched your search. Try different keywords.', 'lingo-house' ); ?></p>
          <?php get_search_form(); ?>
        </div>
      <?php endif; ?>

      <?php
      the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>',
          'next_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>',
      ) );
      ?>
    </div>
  </section>

<?php get_footer(); ?>

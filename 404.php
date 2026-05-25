<?php get_header(); ?>

  <section class="page-hero">
    <div class="container">
      <h1><?php esc_html_e( '404 - Page Not Found', 'lingo-house' ); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <section class="entry-content" style="text-align:center;padding:80px 0;">
    <div class="container">
      <div style="font-size:80px;margin-bottom:20px;">🔍</div>
      <h2 style="font-size:28px;color:var(--navy);margin-bottom:12px;"><?php esc_html_e( 'Oops! Page not found', 'lingo-house' ); ?></h2>
      <p style="color:var(--text-secondary);font-size:16px;max-width:500px;margin:0 auto 28px;"><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'lingo-house' ); ?></p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-corporate"><?php esc_html_e( 'Back to Home', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
    </div>
  </section>

<?php get_footer(); ?>

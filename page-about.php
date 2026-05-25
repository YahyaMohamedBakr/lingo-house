<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <?php while ( have_posts() ) : the_post(); ?>

  <!-- ========== OUR STORY ========== -->
  <section class="about-story">
    <div class="container">
      <div class="about-story-grid">
        <div class="about-story-text anim">
          <span class="section-tag"><?php esc_html_e( 'Our Story', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="text-align:left"><?php esc_html_e( 'A Decade of Language Excellence', 'lingo-house' ); ?></h2>
          <?php the_content(); ?>
        </div>
        <div class="about-story-image anim" style="transition-delay:.15s">🏫</div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>

  <!-- ========== MISSION & VISION ========== -->
  <section class="mission-vision">
    <div class="container">
      <div class="mv-grid">
        <div class="mv-card anim" style="transition-delay:.05s">
          <div class="mv-icon mission"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg></div>
          <h3><?php esc_html_e( 'Our Mission', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'To provide accessible, high-quality language education that empowers individuals and organizations to communicate effectively in a multilingual world.', 'lingo-house' ); ?></p>
        </div>
        <div class="mv-card anim" style="transition-delay:.1s">
          <div class="mv-icon vision"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></div>
          <h3><?php esc_html_e( 'Our Vision', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'To be the leading language education institute in the region, recognized for innovative teaching methods and exceptional student outcomes.', 'lingo-house' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== STATS BAR ========== -->
  <section class="stats-bar">
    <div class="container">
      <div class="stats-bar-grid">
        <div class="stats-bar-item anim" style="transition-delay:.05s"><div class="num" data-count="10000">0</div><div class="lbl"><?php esc_html_e( 'Students Taught', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.1s"><div class="num" data-count="13">0</div><div class="lbl"><?php esc_html_e( 'Languages Offered', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.15s"><div class="num" data-count="100">0</div><div class="lbl"><?php esc_html_e( 'Corporate Clients', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.2s"><div class="num">4.8</div><div class="lbl"><?php esc_html_e( 'Google Rating', 'lingo-house' ); ?></div></div>
      </div>
    </div>
  </section>

  <!-- ========== VALUES ========== -->
  <section class="values-section">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'What Drives Us', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Our Core Values', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'These principles guide every decision we make and every class we teach.', 'lingo-house' ); ?></p>
      </div>
      <div class="values-grid">
        <div class="value-card anim" style="transition-delay:.05s">
          <div class="value-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
          <h4><?php esc_html_e( 'Excellence', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We strive for the highest standards in teaching, curriculum design, and student support.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.1s">
          <div class="value-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg></div>
          <h4><?php esc_html_e( 'Innovation', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We embrace modern teaching technologies and creative methodologies for engaging learning.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.15s">
          <div class="value-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <h4><?php esc_html_e( 'Community', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We build a welcoming, inclusive community where all students feel supported and connected.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.2s">
          <div class="value-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg></div>
          <h4><?php esc_html_e( 'Diversity', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We celebrate cultural diversity as a powerful tool for deeper understanding and learning.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.25s">
          <div class="value-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <h4><?php esc_html_e( 'Integrity', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We operate with transparency, honesty, and ethical standards in all interactions.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.3s">
          <div class="value-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
          <h4><?php esc_html_e( 'Growth', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We are committed to continuous improvement for students, teachers, and our institution.', 'lingo-house' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== ACCREDITATION ========== -->
  <section class="accreditation-section">
    <div class="container">
      <div class="accreditation-inner anim">
        <span class="section-tag"><?php esc_html_e( 'Recognition', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Accreditation & Partners', 'lingo-house' ); ?></h2>
        <p class="section-desc" style="margin:0 auto 0"><?php esc_html_e( 'We are proud to be accredited by leading educational bodies.', 'lingo-house' ); ?></p>
        <div class="accreditation-logos">
          <div class="accreditation-logo">KHDA</div>
          <div class="accreditation-logo">CEFR</div>
          <div class="accreditation-logo">Cambridge</div>
          <div class="accreditation-logo">Goethe</div>
          <div class="accreditation-logo">IELTS</div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

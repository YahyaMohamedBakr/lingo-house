<?php
/**
 * Template Name: Corporates Page
 */

get_header(); ?>

  <section class="page-hero">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <?php while ( have_posts() ) : the_post(); ?>

  <section class="about-story">
    <div class="container">
      <div class="about-story-grid">
        <div class="about-story-text anim">
          <span class="section-tag"><?php esc_html_e( 'Corporate Training', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="text-align:left"><?php esc_html_e( 'Empower Your Workforce with Language Skills', 'lingo-house' ); ?></h2>
          <?php the_content(); ?>
        </div>
        <div class="about-story-image anim" style="transition-delay:.15s">🏢</div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>

  <section class="mission-vision">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Why Choose Us', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Trusted by Leading Companies', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'We deliver tailored language training solutions that drive business results.', 'lingo-house' ); ?></p>
      </div>
      <div class="mv-grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr))">
        <div class="mv-card anim" style="transition-delay:.05s">
          <div class="mv-icon mission"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <h3><?php esc_html_e( 'Expert Trainers', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Certified language instructors with corporate teaching experience across diverse industries.', 'lingo-house' ); ?></p>
        </div>
        <div class="mv-card anim" style="transition-delay:.1s">
          <div class="mv-icon vision"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
          <h3><?php esc_html_e( 'Custom Programs', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Bespoke curricula designed around your industry, team needs, and business objectives.', 'lingo-house' ); ?></p>
        </div>
        <div class="mv-card anim" style="transition-delay:.15s">
          <div class="mv-icon mission"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <h3><?php esc_html_e( 'Flexible Delivery', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'On-site at your office, online via virtual classrooms, or a blended approach to suit your team.', 'lingo-house' ); ?></p>
        </div>
        <div class="mv-card anim" style="transition-delay:.2s">
          <div class="mv-icon vision"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
          <h3><?php esc_html_e( 'Track Results', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Regular progress assessments, detailed reports, and measurable ROI for your training investment.', 'lingo-house' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="values-section">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Training Categories', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Comprehensive Training Solutions', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'From language courses to professional development, we cover all your corporate training needs.', 'lingo-house' ); ?></p>
      </div>
      <div class="values-grid" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr))">
        <div class="value-card anim" style="transition-delay:.05s;text-align:center;">
          <div style="font-size:40px;margin-bottom:12px;">🌍</div>
          <h4><?php esc_html_e( 'Language Courses', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'German, English, Arabic, French, Spanish, and more. All levels from beginner to advanced.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.1s;text-align:center;">
          <div style="font-size:40px;margin-bottom:12px;">📊</div>
          <h4><?php esc_html_e( 'Business Communication', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Presentation skills, negotiation tactics, email etiquette, and cross-cultural communication.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.15s;text-align:center;">
          <div style="font-size:40px;margin-bottom:12px;">📈</div>
          <h4><?php esc_html_e( 'Career Development', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Leadership communication, team management, conflict resolution, and professional coaching.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.2s;text-align:center;">
          <div style="font-size:40px;margin-bottom:12px;">🎯</div>
          <h4><?php esc_html_e( 'Sales & Marketing', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Persuasive communication, client relationship management, and international marketing strategies.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.25s;text-align:center;">
          <div style="font-size:40px;margin-bottom:12px;">👥</div>
          <h4><?php esc_html_e( 'HR & Admin Training', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'HR communication, interview skills, performance management, and administrative excellence.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.3s;text-align:center;">
          <div style="font-size:40px;margin-bottom:12px;">🏆</div>
          <h4><?php esc_html_e( 'Supervisor Programs', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Team leadership, coaching skills, effective delegation, and performance management for managers.', 'lingo-house' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="about-story">
    <div class="container">
      <div class="about-story-grid" style="grid-template-columns:1fr">
        <div class="anim" style="text-align:center">
          <span class="section-tag"><?php esc_html_e( 'How It Works', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="text-align:center"><?php esc_html_e( 'Our Corporate Training Process', 'lingo-house' ); ?></h2>
        </div>
      </div>
      <div class="values-grid" style="grid-template-columns:repeat(auto-fit,minmax(200px,1fr));margin-top:20px;">
        <div class="value-card anim" style="text-align:center;border:none;box-shadow:none;padding:20px;">
          <div style="font-size:36px;font-weight:700;color:var(--teal);margin-bottom:8px;">01</div>
          <h4><?php esc_html_e( 'Needs Analysis', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We assess your team\'s current level and business requirements.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="text-align:center;border:none;box-shadow:none;padding:20px;">
          <div style="font-size:36px;font-weight:700;color:var(--teal);margin-bottom:8px;">02</div>
          <h4><?php esc_html_e( 'Custom Proposal', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We design a tailored program matching your goals and budget.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="text-align:center;border:none;box-shadow:none;padding:20px;">
          <div style="font-size:36px;font-weight:700;color:var(--teal);margin-bottom:8px;">03</div>
          <h4><?php esc_html_e( 'Program Delivery', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Expert trainers deliver engaging sessions on-site or online.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="text-align:center;border:none;box-shadow:none;padding:20px;">
          <div style="font-size:36px;font-weight:700;color:var(--teal);margin-bottom:8px;">04</div>
          <h4><?php esc_html_e( 'Assessment & Report', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'We measure progress and provide detailed performance reports.', 'lingo-house' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="stats-bar">
    <div class="container">
      <div class="stats-bar-grid">
        <div class="stats-bar-item anim" style="transition-delay:.05s"><div class="num" data-count="100">0</div><div class="lbl"><?php esc_html_e( 'Corporate Clients', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.1s"><div class="num" data-count="13">0</div><div class="lbl"><?php esc_html_e( 'Languages', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.15s"><div class="num" data-count="10000">0</div><div class="lbl"><?php esc_html_e( 'Professionals Trained', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.2s"><div class="num">4.8</div><div class="lbl"><?php esc_html_e( 'Client Rating', 'lingo-house' ); ?></div></div>
      </div>
    </div>
  </section>

  <section class="corporate-section">
    <div class="container">
      <div class="corporate-grid">
        <div class="corporate-left anim">
          <span class="section-tag"><?php esc_html_e( 'Get Started', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="color:#fff"><?php esc_html_e( 'Request a Corporate Training Proposal', 'lingo-house' ); ?></h2>
          <p><?php esc_html_e( 'Contact our corporate training team for a free consultation and customized program quote.', 'lingo-house' ); ?></p>
          <div class="corporate-features">
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Free consultation', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Customized quote', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'No obligation', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Quick response within 24h', 'lingo-house' ); ?></div>
          </div>
          <a href="<?php echo esc_url( get_permalink( lingo_house_get_page_id_by_template( 'page-contact.php' ) ) ); ?>" class="btn-corporate"><?php esc_html_e( 'Request Proposal', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
        </div>
        <div class="corporate-right anim" style="transition-delay:.15s">
          <div class="corporate-cats-card">
            <h3><?php esc_html_e( 'Our Services', 'lingo-house' ); ?></h3>
            <div class="cats-grid">
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Language Training', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Business Communication', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Cross-Cultural Training', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Exam Preparation', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Executive Coaching', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Translation Services', 'lingo-house' ); ?></div>
            </div>
          </div>
          <div class="corporate-stats-row">
            <div class="corp-stat"><div class="num" data-count="100">0</div><div class="lbl"><?php esc_html_e( 'Companies', 'lingo-house' ); ?></div></div>
            <div class="corp-stat"><div class="num" data-count="13">0</div><div class="lbl"><?php esc_html_e( 'Languages', 'lingo-house' ); ?></div></div>
            <div class="corp-stat"><div class="num">24/7</div><div class="lbl"><?php esc_html_e( 'Support', 'lingo-house' ); ?></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

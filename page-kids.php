<?php
/**
 * Template Name: Kids Page
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
          <span class="section-tag"><?php esc_html_e( 'For Kids & Teens', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="text-align:left"><?php esc_html_e( 'Fun, Engaging Language Learning for Ages 5–14', 'lingo-house' ); ?></h2>
          <?php the_content(); ?>
        </div>
        <div class="about-story-image anim" style="transition-delay:.15s">🧒</div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>

  <section class="mission-vision">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Why Kids Love Us', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'A Fun Way to Learn', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'We make language learning an adventure with games, songs, and creative activities.', 'lingo-house' ); ?></p>
      </div>
      <div class="mv-grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr))">
        <div class="mv-card anim" style="transition-delay:.05s">
          <div class="mv-icon mission" style="font-size:36px;">🎮</div>
          <h3><?php esc_html_e( 'Game-Based Learning', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Interactive games and challenges that make language acquisition natural and fun for young learners.', 'lingo-house' ); ?></p>
        </div>
        <div class="mv-card anim" style="transition-delay:.1s">
          <div class="mv-icon vision" style="font-size:36px;">👩‍🏫</div>
          <h3><?php esc_html_e( 'Qualified Teachers', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Experienced instructors specialized in teaching children with patience, creativity, and enthusiasm.', 'lingo-house' ); ?></p>
        </div>
        <div class="mv-card anim" style="transition-delay:.15s">
          <div class="mv-icon mission" style="font-size:36px;">👥</div>
          <h3><?php esc_html_e( 'Small Groups', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Max 8 students per class ensures individual attention and more speaking time for every child.', 'lingo-house' ); ?></p>
        </div>
        <div class="mv-card anim" style="transition-delay:.2s">
          <div class="mv-icon vision" style="font-size:36px;">📜</div>
          <h3><?php esc_html_e( 'Certificates', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Progress certificates at the end of each level to celebrate achievements and motivate continued learning.', 'lingo-house' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="values-section">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Age Groups', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Programs by Age', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'Age-appropriate curricula designed for each developmental stage.', 'lingo-house' ); ?></p>
      </div>
      <div class="values-grid" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr))">
        <div class="value-card anim" style="transition-delay:.05s;text-align:center;">
          <div style="font-size:48px;margin-bottom:12px;">🎨</div>
          <h4><?php esc_html_e( 'Little Explorers (5–7)', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Introduction to language through songs, stories, arts & crafts, and playful activities that spark curiosity and joy.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.1s;text-align:center;">
          <div style="font-size:48px;margin-bottom:12px;">📚</div>
          <h4><?php esc_html_e( 'Young Learners (8–10)', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Building vocabulary, basic grammar, and communication skills through structured lessons, group projects, and interactive media.', 'lingo-house' ); ?></p>
        </div>
        <div class="value-card anim" style="transition-delay:.15s;text-align:center;">
          <div style="font-size:48px;margin-bottom:12px;">🚀</div>
          <h4><?php esc_html_e( 'Teens (11–14)', 'lingo-house' ); ?></h4>
          <p><?php esc_html_e( 'Advanced language skills, exam preparation, and real-world communication practice for academic and social confidence.', 'lingo-house' ); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="stats-bar">
    <div class="container">
      <div class="stats-bar-grid">
        <div class="stats-bar-item anim" style="transition-delay:.05s"><div class="num" data-count="500">0</div><div class="lbl"><?php esc_html_e( 'Kids Enrolled', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.1s"><div class="num" data-count="8">0</div><div class="lbl"><?php esc_html_e( 'Languages', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.15s"><div class="num">4.9</div><div class="lbl"><?php esc_html_e( 'Parent Rating', 'lingo-house' ); ?></div></div>
        <div class="stats-bar-item anim" style="transition-delay:.2s"><div class="num" data-count="12">0</div><div class="lbl"><?php esc_html_e( 'Years Experience', 'lingo-house' ); ?></div></div>
      </div>
    </div>
  </section>

  <section class="corporate-section">
    <div class="container">
      <div class="corporate-grid">
        <div class="corporate-left anim">
          <span class="section-tag"><?php esc_html_e( 'Get Started', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="color:#fff"><?php esc_html_e( 'Ready to Enroll Your Child?', 'lingo-house' ); ?></h2>
          <p><?php esc_html_e( 'Give your child the gift of language. Contact us for a free trial class and consultation.', 'lingo-house' ); ?></p>
          <div class="corporate-features">
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Free trial class', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Level assessment included', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Flexible schedule', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Online & in-person options', 'lingo-house' ); ?></div>
          </div>
          <a href="<?php echo esc_url( get_permalink( lingo_house_get_page_id_by_template( 'page-contact.php' ) ) ); ?>" class="btn-corporate"><?php esc_html_e( 'Contact Us', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
        </div>
        <div class="corporate-right anim" style="transition-delay:.15s">
          <div class="corporate-cats-card">
            <h3><?php esc_html_e( 'Our Kids Programs', 'lingo-house' ); ?></h3>
            <div class="cats-grid">
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'German for Kids', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'English for Kids', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'French for Kids', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Arabic for Kids', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Summer Camps', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Homework Support', 'lingo-house' ); ?></div>
            </div>
          </div>
          <div class="corporate-stats-row">
            <div class="corp-stat"><div class="num">5–14</div><div class="lbl"><?php esc_html_e( 'Age Range', 'lingo-house' ); ?></div></div>
            <div class="corp-stat"><div class="num">8</div><div class="lbl"><?php esc_html_e( 'Max/Class', 'lingo-house' ); ?></div></div>
            <div class="corp-stat"><div class="num">4.9</div><div class="lbl"><?php esc_html_e( 'Rating', 'lingo-house' ); ?></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

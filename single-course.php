<?php get_header(); ?>

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <?php while ( have_posts() ) : the_post(); ?>

  <!-- ========== COURSE OVERVIEW ========== -->
  <section class="course-overview">
    <div class="container">
      <div class="course-overview-grid">
        <div class="anim">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="course-image-placeholder" style="background:linear-gradient(135deg, #F57F17, #FBC02D); overflow:hidden;">
              <?php the_post_thumbnail( 'full', array( 'style' => 'width:100%;height:100%;object-fit:cover;' ) ); ?>
            </div>
          <?php else : ?>
            <div class="course-image-placeholder" style="background:linear-gradient(135deg, #F57F17, #FBC02D);">🇩🇪</div>
          <?php endif; ?>
          <div class="course-title-area">
            <h1><?php the_title(); ?></h1>
            <div class="course-rating">
              <div class="stars">
                <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                <svg viewBox="0 0 24 24" fill="currentColor" style="opacity:.4"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              </div>
              <span class="rating-num">4.8</span>
              <span class="rating-count">(238 <?php esc_html_e( 'reviews', 'lingo-house' ); ?>)</span>
            </div>
            <div class="course-desc">
              <?php the_content(); ?>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="course-sidebar anim" style="transition-delay:.1s">
          <div class="sidebar-card-header">
            <h3><?php the_title(); ?></h3>
            <p><?php esc_html_e( 'KHDA Accredited', 'lingo-house' ); ?></p>
          </div>
          <div class="sidebar-info">
            <div class="sidebar-info-item">
              <span class="label"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> <?php esc_html_e( 'Duration', 'lingo-house' ); ?></span>
              <span class="value"><?php echo esc_html( get_post_meta( get_the_ID(), 'course_duration', true ) ?: '4-12 weeks' ); ?></span>
            </div>
            <div class="sidebar-info-item">
              <span class="label"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg> <?php esc_html_e( 'Levels', 'lingo-house' ); ?></span>
              <span class="value"><?php echo esc_html( get_post_meta( get_the_ID(), 'course_levels', true ) ?: 'A1 – C2' ); ?></span>
            </div>
            <div class="sidebar-info-item">
              <span class="label"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg> <?php esc_html_e( 'Group Size', 'lingo-house' ); ?></span>
              <span class="value"><?php esc_html_e( 'Max 12 students', 'lingo-house' ); ?></span>
            </div>
            <div class="sidebar-info-item">
              <span class="label"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg> <?php esc_html_e( 'Starting From', 'lingo-house' ); ?></span>
              <span class="value" style="color:var(--orange);font-size:16px"><?php echo esc_html( get_post_meta( get_the_ID(), 'course_price', true ) ?: 'AED 1,200' ); ?></span>
            </div>
            <div class="sidebar-info-item">
              <span class="label"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> <?php esc_html_e( 'Schedule', 'lingo-house' ); ?></span>
              <span class="value"><?php esc_html_e( 'Flexible', 'lingo-house' ); ?></span>
            </div>
          </div>
          <div class="sidebar-actions">
            <button class="btn-register"><?php esc_html_e( 'Register Now', 'lingo-house' ); ?></button>
            <button class="btn-free-trial"><?php esc_html_e( 'Book Free Trial', 'lingo-house' ); ?></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WHAT YOU'LL LEARN ========== -->
  <section class="learn-section">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Outcomes', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'What You\'ll Learn', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'Our comprehensive curriculum ensures you develop well-rounded language skills.', 'lingo-house' ); ?></p>
      </div>
      <div class="learn-grid">
        <div class="learn-item anim" style="transition-delay:.05s">
          <div class="learn-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
          <div><h4><?php esc_html_e( 'Confident Speaking', 'lingo-house' ); ?></h4><p><?php esc_html_e( 'Engage in conversations on a wide range of topics with improved pronunciation and fluency.', 'lingo-house' ); ?></p></div>
        </div>
        <div class="learn-item anim" style="transition-delay:.1s">
          <div class="learn-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
          <div><h4><?php esc_html_e( 'Reading & Writing', 'lingo-house' ); ?></h4><p><?php esc_html_e( 'Read and write effectively in various formats including emails, reports, and academic texts.', 'lingo-house' ); ?></p></div>
        </div>
        <div class="learn-item anim" style="transition-delay:.15s">
          <div class="learn-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
          <div><h4><?php esc_html_e( 'Grammar Mastery', 'lingo-house' ); ?></h4><p><?php esc_html_e( 'Understand and apply German grammar rules accurately in both spoken and written contexts.', 'lingo-house' ); ?></p></div>
        </div>
        <div class="learn-item anim" style="transition-delay:.2s">
          <div class="learn-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg></div>
          <div><h4><?php esc_html_e( 'Cultural Awareness', 'lingo-house' ); ?></h4><p><?php esc_html_e( 'Develop understanding of cultural nuances in German-speaking environments and contexts.', 'lingo-house' ); ?></p></div>
        </div>
        <div class="learn-item anim" style="transition-delay:.25s">
          <div class="learn-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div><h4><?php esc_html_e( 'Exam Strategies', 'lingo-house' ); ?></h4><p><?php esc_html_e( 'Learn proven techniques for Goethe-Institut and other German proficiency exams.', 'lingo-house' ); ?></p></div>
        </div>
        <div class="learn-item anim" style="transition-delay:.3s">
          <div class="learn-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
          <div><h4><?php esc_html_e( 'Professional Skills', 'lingo-house' ); ?></h4><p><?php esc_html_e( 'Master business communication, presentations, and professional correspondence in German.', 'lingo-house' ); ?></p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== RELATED COURSES ========== -->
  <section class="related-section">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Explore More', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Related Courses', 'lingo-house' ); ?></h2>
      </div>
      <div class="related-grid">
        <?php
        $lang_terms = wp_get_post_terms( get_the_ID(), 'language' );
        $related = new WP_Query( array(
            'post_type'      => 'course',
            'posts_per_page' => 3,
            'post__not_in'   => array( get_the_ID() ),
            'tax_query'      => $lang_terms ? array(
                array(
                    'taxonomy' => 'language',
                    'field'    => 'slug',
                    'terms'    => wp_list_pluck( $lang_terms, 'slug' ),
                ),
            ) : array(),
        ) );
        $rd = 0.05;
        if ( $related->have_posts() ) :
            while ( $related->have_posts() ) : $related->the_post();
                $r_lang = wp_get_post_terms( get_the_ID(), 'language' );
                $r_slug = ! empty( $r_lang ) ? $r_lang[0]->slug : 'german';
                $r_name = ! empty( $r_lang ) ? $r_lang[0]->name : __( 'Course', 'lingo-house' );
                ?>
                <div class="course-detail-card anim" style="transition-delay:<?php echo esc_attr( $rd ); ?>s">
                  <div class="card-top card-german"><span class="flag"><?php echo esc_html( lingo_house_get_flag( $r_slug ) ); ?></span><div class="overlay"></div></div>
                  <div class="card-body">
                    <h3><?php the_title(); ?></h3>
                    <div class="card-meta"><span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg> <?php echo esc_html( $r_name ); ?></span></div>
                    <p><?php echo wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 15 ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-outline"><?php esc_html_e( 'View Course', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                  </div>
                </div>
                <?php
                $rd += 0.05;
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT CTA ========== -->
  <section class="corporate-section">
    <div class="container">
      <div class="corporate-grid">
        <div class="corporate-left anim">
          <span class="section-tag"><?php esc_html_e( 'Get Started', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="color:#fff"><?php esc_html_e( 'Ready to Start This Course?', 'lingo-house' ); ?></h2>
          <p><?php esc_html_e( 'Contact us to register, ask questions, or schedule a free trial class. Our team is here to help.', 'lingo-house' ); ?></p>
          <div class="corporate-features">
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Free trial class', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Flexible schedule', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'KHDA accredited', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Online & in-person', 'lingo-house' ); ?></div>
          </div>
          <div style="display:flex;flex-wrap:wrap;gap:12px;">
            <a href="<?php echo esc_url( get_permalink( lingo_house_get_page_id_by_template( 'page-contact.php' ) ) ); ?>" class="btn-corporate"><?php esc_html_e( 'Register Now', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
            <?php $phone = lingo_house_get_contact( 'phone' ); if ( $phone ) : ?>
              <a href="tel:<?php echo esc_attr( $phone ); ?>" class="btn-free-trial" style="background:transparent;border:2px solid rgba(255,255,255,.3);color:#fff;padding:10px 24px;border-radius:8px;display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:600;cursor:pointer;text-decoration:none;">📞 <?php echo esc_html( $phone ); ?></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="corporate-right anim" style="transition-delay:.15s">
          <div class="corporate-cats-card">
            <h3><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h3>
            <div class="cats-grid">
              <?php $address = lingo_house_get_contact( 'address' ); if ( $address ) : ?>
                <div class="cat-item"><span class="dot"></span><?php echo esc_html( $address ); ?></div>
              <?php endif; ?>
              <?php $email = lingo_house_get_contact( 'email' ); if ( $email ) : ?>
                <div class="cat-item"><span class="dot"></span><?php echo esc_html( $email ); ?></div>
              <?php endif; ?>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'KHDA Accredited', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Expert Native Teachers', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Small Class Sizes', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Free Level Assessment', 'lingo-house' ); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endwhile; ?>

<?php get_footer(); ?>

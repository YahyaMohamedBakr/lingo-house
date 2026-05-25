<?php get_header(); ?>

  <!-- ========== HERO ========== -->
  <section class="hero" id="hero">
    <div class="container">
      <div class="hero-left anim">
        <div class="hero-badge"><span class="pulse"></span> <?php echo esc_html( get_theme_mod( 'lingo_house_hero_badge', __( 'Now Enrolling — Summer 2026', 'lingo-house' ) ) ); ?></div>
        <h1><?php echo wp_kses_post( get_theme_mod( 'lingo_house_hero_title', __( 'Your language center in <span>Dubai Knowledge Village</span>', 'lingo-house' ) ) ); ?></h1>
        <p class="hero-sub"><?php echo esc_html( get_theme_mod( 'lingo_house_hero_subtitle', __( 'Providing face-to-face and online classes for adults, kids, corporate clients and schools. Learn from experienced teachers in a motivating environment.', 'lingo-house' ) ) ); ?></p>
        <div class="hero-checks">
          <div class="hero-check"><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <?php esc_html_e( 'KHDA Accredited', 'lingo-house' ); ?></div>
          <div class="hero-check"><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <?php esc_html_e( '13+ Languages', 'lingo-house' ); ?></div>
          <div class="hero-check"><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <?php esc_html_e( '10K+ Students', 'lingo-house' ); ?></div>
        </div>
      </div>
      <div class="hero-card anim" style="transition-delay:.15s">
        <h3><?php esc_html_e( 'Register for a Course', 'lingo-house' ); ?></h3>
        <p><?php esc_html_e( 'Get started with your language learning journey today', 'lingo-house' ); ?></p>
        <form id="hero-form">
          <div class="form-group"><label><?php esc_html_e( 'Full Name', 'lingo-house' ); ?></label><input type="text" class="form-input" placeholder="<?php esc_attr_e( 'Enter your name', 'lingo-house' ); ?>" required></div>
          <div class="form-group"><label><?php esc_html_e( 'Phone Number', 'lingo-house' ); ?></label><input type="tel" class="form-input" placeholder="+971 XX XXX XXXX" required></div>
          <div class="form-group"><label><?php esc_html_e( 'Email Address', 'lingo-house' ); ?></label><input type="email" class="form-input" placeholder="your@email.com" required></div>
          <button type="button" class="promo-toggle" id="promo-toggle">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
            <?php esc_html_e( 'I have a promocode', 'lingo-house' ); ?>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="promo-field" id="promo-field"><div class="form-group"><input type="text" class="form-input" placeholder="<?php esc_attr_e( 'Enter promocode', 'lingo-house' ); ?>"></div></div>
          <button type="submit" class="btn-submit">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            <?php esc_html_e( 'Submit', 'lingo-house' ); ?>
          </button>
          <p class="hero-terms"><?php esc_html_e( 'By submitting, you agree to our', 'lingo-house' ); ?> <a href="#"><?php esc_html_e( 'Terms & Conditions', 'lingo-house' ); ?></a></p>
        </form>
      </div>
    </div>
  </section>

  <!-- ========== LANGUAGE COURSES ========== -->
  <section class="courses-section" id="courses">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Our Courses', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Learn a New Language', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'Choose from 8 popular languages and various course formats tailored to your learning goals and schedule.', 'lingo-house' ); ?></p>
      </div>
      <div class="courses-grid">

        <?php
        $languages = get_terms( array(
            'taxonomy'   => 'language',
            'hide_empty' => false,
        ) );

        if ( ! empty( $languages ) && ! is_wp_error( $languages ) ) :
            $delay = 0.05;
            foreach ( $languages as $lang ) :
                $slug = $lang->slug;
                $courses_in_lang = new WP_Query( array(
                    'post_type'      => 'course',
                    'posts_per_page' => -1,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'language',
                            'field'    => 'slug',
                            'terms'    => $slug,
                        ),
                    ),
                ) );
                $course_count = $courses_in_lang->found_posts;
                $card_class = 'card-' . $slug;
                ?>
                <div class="lang-card anim" style="transition-delay:<?php echo esc_attr( $delay ); ?>s">
                  <div class="lang-card-header <?php echo esc_attr( $card_class ); ?>" data-card="<?php echo esc_attr( $slug ); ?>">
                    <span class="flag"><?php echo esc_html( lingo_house_get_flag( $lang->slug ) ); ?></span><div class="overlay"></div>
                    <div class="header-bottom"><h3><?php echo esc_html( $lang->name ); ?></h3><svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></div>
                  </div>
                  <div class="lang-card-body">
                    <?php
                    if ( $courses_in_lang->have_posts() ) :
                        while ( $courses_in_lang->have_posts() ) : $courses_in_lang->the_post(); ?>
                            <a href="<?php the_permalink(); ?>"><span class="dot"></span><?php the_title(); ?></a>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                  </div>
                </div>
                <?php
                $delay += 0.05;
            endforeach;
        else :
            // Default languages if none exist in taxonomy
            $default_langs = array(
                'arabic'  => __( 'Arabic', 'lingo-house' ),
                'english' => __( 'English', 'lingo-house' ),
                'russian' => __( 'Russian', 'lingo-house' ),
                'spanish' => __( 'Spanish', 'lingo-house' ),
                'german'  => __( 'German', 'lingo-house' ),
                'italian' => __( 'Italian', 'lingo-house' ),
                'turkish' => __( 'Turkish', 'lingo-house' ),
                'french'  => __( 'French', 'lingo-house' ),
            );
            $d = 0.05;
            foreach ( $default_langs as $slug => $name ) :
                $card_class = 'card-' . $slug;
                $archive_url = get_post_type_archive_link( 'course' ) . '?language=' . $slug;
                ?>
                <div class="lang-card anim" style="transition-delay:<?php echo esc_attr( $d ); ?>s">
                  <div class="lang-card-header <?php echo esc_attr( $card_class ); ?>" data-card="<?php echo esc_attr( $slug ); ?>">
                    <span class="flag"><?php echo esc_html( lingo_house_get_flag( $slug ) ); ?></span><div class="overlay"></div>
                    <div class="header-bottom"><h3><?php echo esc_html( $name ); ?></h3><svg class="chevron-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></div>
                  </div>
                  <div class="lang-card-body">
                    <a href="<?php echo esc_url( $archive_url ); ?>"><span class="dot"></span><?php printf( esc_html__( 'Regular %s', 'lingo-house' ), $name ); ?></a>
                    <a href="<?php echo esc_url( $archive_url ); ?>"><span class="dot"></span><?php printf( esc_html__( 'Intensive %s', 'lingo-house' ), $name ); ?></a>
                    <a href="<?php echo esc_url( $archive_url ); ?>"><span class="dot"></span><?php printf( esc_html__( 'Online %s', 'lingo-house' ), $name ); ?></a>
                    <a href="<?php echo esc_url( $archive_url ); ?>"><span class="dot"></span><?php printf( esc_html__( 'Private %s', 'lingo-house' ), $name ); ?></a>
                  </div>
                </div>
                <?php
                $d += 0.05;
            endforeach;
        endif;
        ?>

      </div>
    </div>
  </section>

  <!-- ========== PLACEMENT TEST ========== -->
  <section class="placement-section">
    <div class="container">
      <div class="placement-banner anim">
        <div class="deco-circle"></div>
        <div class="placement-inner">
          <div class="placement-text">
            <div class="badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg> <?php esc_html_e( 'Free Assessment', 'lingo-house' ); ?></div>
            <h2><?php esc_html_e( 'Free German Placement Test', 'lingo-house' ); ?></h2>
            <p><?php esc_html_e( 'Not sure about your current German level? Take our free online placement test to discover your proficiency and get personalized course recommendations.', 'lingo-house' ); ?></p>
            <ul class="placement-list">
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <?php esc_html_e( 'Takes only 15-20 minutes', 'lingo-house' ); ?></li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <?php esc_html_e( 'Instant results with level recommendation', 'lingo-house' ); ?></li>
              <li><svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> <?php esc_html_e( 'Personalized course suggestion', 'lingo-house' ); ?></li>
            </ul>
            <button class="btn-white"><?php esc_html_e( 'Take Your Test for Free', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
          </div>
          <div class="placement-visual">
            <div class="placement-illus">
              <div class="placement-main-card"><span class="icon">📝</span><h4><?php esc_html_e( 'Quick Test', 'lingo-house' ); ?></h4><p><?php esc_html_e( 'Know your level', 'lingo-house' ); ?></p></div>
              <div class="placement-float top">🎯</div>
              <div class="placement-float bot">⭐</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CORPORATE ========== -->
  <section class="corporate-section" id="corporates">
    <div class="container">
      <div class="corporate-grid">
        <div class="corporate-left anim">
          <span class="section-tag"><?php esc_html_e( 'For Business', 'lingo-house' ); ?></span>
          <h2 class="section-title" style="color:#fff"><?php esc_html_e( 'Corporate Training Solutions', 'lingo-house' ); ?></h2>
          <p><?php esc_html_e( 'Empower your workforce with professional language training and soft skills development. We deliver customized programs for your business.', 'lingo-house' ); ?></p>
          <div class="corporate-features">
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( '13+ languages available', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Customized programs', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'Flexible scheduling', 'lingo-house' ); ?></div>
            <div class="corporate-feat"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg> <?php esc_html_e( 'On-site & online delivery', 'lingo-house' ); ?></div>
          </div>
          <button class="btn-corporate"><?php esc_html_e( 'Get Your Program', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
        </div>
        <div class="corporate-right anim" style="transition-delay:.15s">
          <div class="corporate-cats-card">
            <h3><?php esc_html_e( 'Training Categories', 'lingo-house' ); ?></h3>
            <div class="cats-grid">
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Language Courses', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Administrative Skills', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Career Development', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'HR Training', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Sales & Marketing', 'lingo-house' ); ?></div>
              <div class="cat-item"><span class="dot"></span><?php esc_html_e( 'Supervisors', 'lingo-house' ); ?></div>
            </div>
          </div>
          <div class="corporate-stats-row">
            <div class="corp-stat"><div class="num" data-count="13">0</div><div class="lbl"><?php esc_html_e( 'Languages', 'lingo-house' ); ?></div></div>
            <div class="corp-stat"><div class="num" data-count="100">0</div><div class="lbl"><?php esc_html_e( 'Companies', 'lingo-house' ); ?></div></div>
            <div class="corp-stat"><div class="num">24/7</div><div class="lbl"><?php esc_html_e( 'Support', 'lingo-house' ); ?></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WHY CHOOSE US ========== -->
  <section class="why-section" id="about">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Why Choose Us', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Trusted by Thousands of Students', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'Lingo House is a KHDA-accredited language school providing high-quality language education.', 'lingo-house' ); ?></p>
      </div>

      <div class="stats-row">
        <div class="stat-card anim" style="transition-delay:.05s">
          <div class="stat-icon amber"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div>
          <div class="stat-value amber">4.8</div>
          <div class="stat-label"><?php esc_html_e( 'Google Rating', 'lingo-house' ); ?></div>
          <div class="stat-sub">500+ <?php esc_html_e( 'reviews', 'lingo-house' ); ?></div>
        </div>
        <div class="stat-card anim" style="transition-delay:.1s">
          <div class="stat-icon teal"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
          <div class="stat-value teal" data-count="10000">0</div>
          <div class="stat-label"><?php esc_html_e( 'Happy Students', 'lingo-house' ); ?></div>
          <div class="stat-sub"><?php esc_html_e( 'and counting', 'lingo-house' ); ?></div>
        </div>
        <div class="stat-card anim" style="transition-delay:.15s">
          <div class="stat-icon blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg></div>
          <div class="stat-value blue" data-count="100">0</div>
          <div class="stat-label"><?php esc_html_e( 'Companies Served', 'lingo-house' ); ?></div>
          <div class="stat-sub"><?php esc_html_e( 'corporate partners', 'lingo-house' ); ?></div>
        </div>
      </div>

      <div class="why-grid">
        <div class="why-content anim">
          <h3><?php esc_html_e( 'What Makes Us Different', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'At Lingo House, we combine proven teaching methodologies with modern technology to deliver an effective and enjoyable learning experience.', 'lingo-house' ); ?></p>
          <div class="benefits-grid">
            <div class="benefit-item"><div class="benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div><span><?php esc_html_e( 'KHDA Accredited Institute', 'lingo-house' ); ?></span></div>
            <div class="benefit-item"><div class="benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div><span><?php esc_html_e( 'Certified & Experienced Teachers', 'lingo-house' ); ?></span></div>
            <div class="benefit-item"><div class="benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg></div><span><?php esc_html_e( '13+ Languages Available', 'lingo-house' ); ?></span></div>
            <div class="benefit-item"><div class="benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><span><?php esc_html_e( 'Small Group Classes (Max 12)', 'lingo-house' ); ?></span></div>
            <div class="benefit-item"><div class="benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg></div><span><?php esc_html_e( 'Recognized Certificates', 'lingo-house' ); ?></span></div>
            <div class="benefit-item"><div class="benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><span><?php esc_html_e( 'Google Rating 4.8 Stars', 'lingo-house' ); ?></span></div>
          </div>
          <button class="btn-corporate"><?php esc_html_e( 'Book Free Trial Class', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
        </div>
        <div class="gallery-grid anim" style="transition-delay:.15s">
          <div class="gallery-col">
            <div class="gallery-item"><div class="placeholder g-teal">🎓</div></div>
            <div class="gallery-item"><div class="placeholder g-amber">📚</div></div>
          </div>
          <div class="gallery-col offset">
            <div class="gallery-item"><div class="placeholder g-blue">🌍</div></div>
            <div class="gallery-item"><div class="placeholder g-rose">🏆</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== NEWS ========== -->
  <section class="news-section" id="news">
    <div class="container">
      <div class="news-top anim">
        <div>
          <span class="section-tag"><?php esc_html_e( 'Latest Updates', 'lingo-house' ); ?></span>
          <h2 class="section-title"><?php esc_html_e( 'News', 'lingo-house' ); ?></h2>
        </div>
        <a href="#"><?php esc_html_e( 'Read All', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
      <div class="news-grid">
        <?php
        $recent_posts = new WP_Query( array(
            'posts_per_page' => 3,
            'post_type'      => 'post',
        ) );
        if ( $recent_posts->have_posts() ) :
            $nd = 0.05;
            while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
            <article class="news-card anim" style="transition-delay:<?php echo esc_attr( $nd ); ?>s">
              <div class="news-img n-teal">
                <div class="placeholder">📰</div>
                <div class="date-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> <?php echo get_the_date( 'M j, Y' ); ?></div>
              </div>
              <div class="news-body">
                <h3><?php the_title(); ?></h3>
                <p><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
              </div>
            </article>
                <?php
                $nd += 0.05;
            endwhile;
            wp_reset_postdata();
        else :
            for ( $i = 1; $i <= 3; $i++ ) : ?>
            <article class="news-card anim" style="transition-delay:<?php echo esc_attr( 0.05 * $i ); ?>s">
              <div class="news-img n-teal">
                <div class="placeholder">📰</div>
                <div class="date-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> <?php echo esc_html( date( 'M j, Y' ) ); ?></div>
              </div>
              <div class="news-body">
                <h3><?php esc_html_e( 'Sample News Article', 'lingo-house' ); ?></h3>
                <p><?php esc_html_e( 'Stay tuned for our latest updates and news about our language courses and events.', 'lingo-house' ); ?></p>
                <a href="#" class="read-more"><?php esc_html_e( 'Read More', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
              </div>
            </article>
            <?php endfor;
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="section-header anim">
        <span class="section-tag"><?php esc_html_e( 'Common Questions', 'lingo-house' ); ?></span>
        <h2 class="section-title"><?php esc_html_e( 'Frequently Asked Questions', 'lingo-house' ); ?></h2>
        <p class="section-desc"><?php esc_html_e( 'Find answers to the most common questions about our courses, enrollment, and services.', 'lingo-house' ); ?></p>
      </div>
      <div class="faq-list">
        <?php
        $faqs = array(
            array(
                'q' => __( 'How can I start learning a language at Lingo House?', 'lingo-house' ),
                'a' => __( 'Getting started is easy! Simply fill out the registration form on our website, call us, or visit us at our campus. We will help you choose the right course based on your level and goals.', 'lingo-house' ),
            ),
            array(
                'q' => __( 'What learning methods do you use?', 'lingo-house' ),
                'a' => __( 'We use the communicative approach combined with modern teaching technologies. Our classes focus on practical speaking skills, real-life scenarios, and interactive activities.', 'lingo-house' ),
            ),
            array(
                'q' => __( 'How can I check my language level?', 'lingo-house' ),
                'a' => __( 'You can take our free online placement test directly on our website. For other languages, we offer a free consultation where our experienced teachers will assess your level.', 'lingo-house' ),
            ),
            array(
                'q' => __( 'Do you offer a free trial lesson?', 'lingo-house' ),
                'a' => __( 'Yes! We offer a free trial lesson for most of our courses. This is a great way to experience our teaching style, meet our teachers, and decide if the course is right for you.', 'lingo-house' ),
            ),
            array(
                'q' => __( 'What types of courses do you offer?', 'lingo-house' ),
                'a' => __( 'We offer Regular, Intensive, Online, Private, Corporate, Kids, and Exam Preparation courses. Each format is designed to meet different learning needs.', 'lingo-house' ),
            ),
        );
        $fd = 0.03;
        foreach ( $faqs as $index => $faq ) : ?>
        <div class="faq-item anim <?php echo $index === 0 ? 'open' : ''; ?>" style="transition-delay:<?php echo esc_attr( $fd ); ?>s">
          <button class="faq-q"><?php echo esc_html( $faq['q'] ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="faq-a"><p><?php echo esc_html( $faq['a'] ); ?></p></div>
        </div>
            <?php
            $fd += 0.03;
        endforeach;
        ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

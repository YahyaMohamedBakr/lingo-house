<?php get_header(); ?>

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="container">
      <h1><?php esc_html_e( 'Our Courses', 'lingo-house' ); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <!-- ========== FILTER BAR ========== -->
  <section class="filter-bar">
    <div class="container">
      <div class="filter-row">
        <span class="filter-label"><?php esc_html_e( 'Language:', 'lingo-house' ); ?></span>
        <div class="filter-buttons" id="lang-filters">
          <button class="filter-btn active" data-filter="all"><?php esc_html_e( 'All', 'lingo-house' ); ?></button>
          <?php
          $languages = get_terms( array(
              'taxonomy'   => 'language',
              'hide_empty' => true,
          ) );
          if ( ! empty( $languages ) && ! is_wp_error( $languages ) ) :
              foreach ( $languages as $lang ) : ?>
                <button class="filter-btn" data-filter="<?php echo esc_attr( $lang->slug ); ?>"><?php echo esc_html( $lang->name ); ?></button>
              <?php endforeach;
          endif;
          ?>
        </div>
        <div class="filter-divider"></div>
        <span class="filter-label"><?php esc_html_e( 'Type:', 'lingo-house' ); ?></span>
        <div class="filter-buttons" id="type-filters">
          <button class="filter-btn active" data-type="all"><?php esc_html_e( 'All', 'lingo-house' ); ?></button>
          <?php
          $course_types = get_terms( array(
              'taxonomy'   => 'course-type',
              'hide_empty' => true,
          ) );
          if ( ! empty( $course_types ) && ! is_wp_error( $course_types ) ) :
              foreach ( $course_types as $type ) : ?>
                <button class="filter-btn" data-type="<?php echo esc_attr( $type->slug ); ?>"><?php echo esc_html( $type->name ); ?></button>
              <?php endforeach;
          endif;
          ?>
        </div>
        <div class="filter-search">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          <input type="text" placeholder="<?php esc_attr_e( 'Search courses...', 'lingo-house' ); ?>" id="course-search">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== COURSES GRID ========== -->
  <section class="courses-section" style="padding-top:40px">
    <div class="container">
      <div class="course-detail-grid" id="courses-grid">

        <?php
        $delay = 0.05;
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $lang_terms = wp_get_post_terms( get_the_ID(), 'language' );
                $type_terms = wp_get_post_terms( get_the_ID(), 'course-type' );
                $lang_slugs = array();
                $type_slugs = array();
                $lang_name  = '';
                foreach ( $lang_terms as $lt ) {
                    $lang_slugs[] = $lt->slug;
                    $lang_name    = $lt->name;
                }
                foreach ( $type_terms as $tt ) {
                    $type_slugs[] = $tt->slug;
                }
                $card_class = $lang_terms ? 'card-' . $lang_terms[0]->slug : 'card-german';
                $lang_slug  = $lang_terms ? $lang_terms[0]->slug : 'german';
                $lang_id    = $lang_terms ? $lang_terms[0]->term_id : 0;
                $lang_img   = $lang_id ? lingo_house_get_language_image( $lang_id ) : '';
                ?>
                <div class="course-detail-card anim" data-lang="<?php echo esc_attr( implode( ',', $lang_slugs ) ); ?>" data-types="<?php echo esc_attr( implode( ',', $type_slugs ) ); ?>" style="transition-delay:<?php echo esc_attr( $delay ); ?>s">
                  <div class="card-top <?php echo esc_attr( $card_class ); ?>">
                    <?php if ( $lang_img ) : ?>
                      <img src="<?php echo esc_url( $lang_img ); ?>" alt="<?php echo esc_attr( $lang_name ?: 'Course' ); ?>" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;" />
                    <?php else : ?>
                      <span class="flag"><?php echo esc_html( lingo_house_get_flag( $lang_slug ) ); ?></span>
                    <?php endif; ?>
                    <div class="overlay"></div>
                  </div>
                  <div class="card-body">
                    <h3><?php the_title(); ?></h3>
                    <div class="card-meta">
                      <?php if ( $lang_terms ) : ?>
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg> <?php echo esc_html( $lang_name ); ?></span>
                      <?php endif; ?>
                      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> <?php esc_html_e( 'All Levels', 'lingo-house' ); ?></span>
                    </div>
                    <p><?php echo wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20 ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-outline"><?php esc_html_e( 'View Course', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                  </div>
                </div>
                <?php
                $delay += 0.05;
            endwhile;
        else :
            // Fallback sample courses
            $sample_courses = array(
                array( 'title' => __( 'German A1 - Beginner', 'lingo-house' ), 'lang' => 'german', 'types' => 'regular,intensive', 'desc' => __( 'Start your German learning journey from scratch with our comprehensive beginner course.', 'lingo-house' ) ),
                array( 'title' => __( 'German A2 - Elementary', 'lingo-house' ), 'lang' => 'german', 'types' => 'regular,intensive,online', 'desc' => __( 'Build on your basic German knowledge with expanded vocabulary and grammar.', 'lingo-house' ) ),
                array( 'title' => __( 'German B1 - Intermediate', 'lingo-house' ), 'lang' => 'german', 'types' => 'regular,intensive,online', 'desc' => __( 'Reach intermediate fluency and handle everyday conversations with confidence.', 'lingo-house' ) ),
                array( 'title' => __( 'German B2 - Upper Intermediate', 'lingo-house' ), 'lang' => 'german', 'types' => 'regular,intensive,private', 'desc' => __( 'Achieve advanced proficiency for professional and academic contexts.', 'lingo-house' ) ),
                array( 'title' => __( 'German for Kids', 'lingo-house' ), 'lang' => 'german', 'types' => 'kids,regular', 'desc' => __( 'Fun and engaging German classes designed specifically for children aged 5-14.', 'lingo-house' ) ),
                array( 'title' => __( 'Goethe Exam Prep', 'lingo-house' ), 'lang' => 'german', 'types' => 'intensive,private,exam', 'desc' => __( 'Prepare for your Goethe-Zertifikat exam with expert teachers and practice tests.', 'lingo-house' ) ),
                array( 'title' => __( 'Business German', 'lingo-house' ), 'lang' => 'german', 'types' => 'corporate,private,intensive', 'desc' => __( 'Professional German for the workplace, including emails, meetings, and presentations.', 'lingo-house' ) ),
                array( 'title' => __( 'Intensive German Course', 'lingo-house' ), 'lang' => 'german', 'types' => 'intensive', 'desc' => __( 'Accelerate your learning with our fast-paced intensive German program.', 'lingo-house' ) ),
            );
            foreach ( $sample_courses as $sc ) : ?>
                <div class="course-detail-card anim" data-lang="<?php echo esc_attr( $sc['lang'] ); ?>" data-types="<?php echo esc_attr( $sc['types'] ); ?>" style="transition-delay:<?php echo esc_attr( $delay ); ?>s">
                  <div class="card-top card-german">
                    <span class="flag"><?php echo esc_html( lingo_house_get_flag( $sc['lang'] ) ); ?></span><div class="overlay"></div>
                  </div>
                  <div class="card-body">
                    <h3><?php echo esc_html( $sc['title'] ); ?></h3>
                    <div class="card-meta">
                      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg> <?php esc_html_e( 'German', 'lingo-house' ); ?></span>
                      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg> <?php esc_html_e( 'All Levels', 'lingo-house' ); ?></span>
                    </div>
                    <p><?php echo esc_html( $sc['desc'] ); ?></p>
                    <a href="#" class="btn-outline"><?php esc_html_e( 'View Course', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                  </div>
                </div>
                <?php
                $delay += 0.05;
            endforeach;
        endif;
        ?>

      </div>

      <div id="no-results" style="display:none;text-align:center;padding:60px 20px;">
        <div style="font-size:48px;margin-bottom:16px;">🔍</div>
        <h3 style="font-size:20px;color:var(--navy);margin-bottom:8px;"><?php esc_html_e( 'No courses found', 'lingo-house' ); ?></h3>
        <p style="color:var(--text-secondary);"><?php esc_html_e( 'Try adjusting your filters or search terms.', 'lingo-house' ); ?></p>
      </div>

      <?php
      the_posts_pagination( array(
          'mid_size'  => 2,
          'prev_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>',
          'next_text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>',
      ) );
      ?>
    </div>
  </section>

  <!-- ========== CTA SECTION ========== -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-inner anim">
        <div>
          <h2><?php esc_html_e( "Can't find what you need?", 'lingo-house' ); ?></h2>
          <p><?php esc_html_e( 'We offer customized language solutions for individuals and businesses. Get in touch and we\'ll help you find the perfect course.', 'lingo-house' ); ?></p>
          <div class="cta-contact">
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 3.68 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.81.36 1.6.65 2.36a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.76.29 1.55.52 2.36.65a2 2 0 0 1 1.72 2v3z"/></svg> <?php echo esc_html( lingo_house_get_contact( 'phone' ) ); ?></span>
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> <?php echo esc_html( lingo_house_get_contact( 'email' ) ); ?></span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-white"><?php esc_html_e( 'Contact Us', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

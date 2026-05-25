<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

  <!-- ========== PAGE HERO ========== -->
  <section class="page-hero">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <?php lingo_house_breadcrumb(); ?>
    </div>
  </section>

  <!-- ========== CONTACT INFO CARDS ========== -->
  <section class="contact-cards">
    <div class="container">
      <div class="contact-cards-grid">
        <div class="contact-info-card anim" style="transition-delay:.05s">
          <div class="ci-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
          <h4><?php esc_html_e( 'Visit Us', 'lingo-house' ); ?></h4>
          <p><?php echo nl2br( esc_html( lingo_house_get_contact( 'address' ) ?: __( 'Dubai Knowledge Village, Block 11, Dubai, UAE', 'lingo-house' ) ) ); ?></p>
        </div>
        <div class="contact-info-card anim" style="transition-delay:.1s">
          <div class="ci-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 3.68 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.81.36 1.6.65 2.36a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.76.29 1.55.52 2.36.65a2 2 0 0 1 1.72 2v3z"/></svg></div>
          <h4><?php esc_html_e( 'Call Us', 'lingo-house' ); ?></h4>
          <p>
            <a href="tel:<?php echo esc_attr( lingo_house_get_contact( 'phone' ) ); ?>"><?php echo esc_html( lingo_house_get_contact( 'phone' ) ); ?></a><br>
            <?php if ( $phone2 = lingo_house_get_contact( 'phone_secondary' ) ) : ?>
              <a href="tel:<?php echo esc_attr( $phone2 ); ?>"><?php echo esc_html( $phone2 ); ?></a><br>
            <?php endif; ?>
            (WhatsApp also available)
          </p>
        </div>
        <div class="contact-info-card anim" style="transition-delay:.15s">
          <div class="ci-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
          <h4><?php esc_html_e( 'Email Us', 'lingo-house' ); ?></h4>
          <p>
            <a href="mailto:<?php echo esc_attr( lingo_house_get_contact( 'email' ) ); ?>"><?php echo esc_html( lingo_house_get_contact( 'email' ) ); ?></a><br>
            <?php if ( $email2 = lingo_house_get_contact( 'email_secondary' ) ) : ?>
              <a href="mailto:<?php echo esc_attr( $email2 ); ?>"><?php echo esc_html( $email2 ); ?></a><br>
            <?php endif; ?>
            <?php esc_html_e( 'We reply within 24 hours', 'lingo-house' ); ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT FORM + SIDEBAR ========== -->
  <section class="contact-main">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-form-card anim">
          <h3><?php esc_html_e( 'Send Us a Message', 'lingo-house' ); ?></h3>
          <p><?php esc_html_e( 'Have a question or want to enroll? Fill out the form below and we\'ll get back to you shortly.', 'lingo-house' ); ?></p>
          <?php echo do_shortcode( '[contact-form-7 id="' . get_theme_mod( 'lingo_house_cf7_id', '' ) . '" title="Contact form"]' ); ?>
          <form id="contact-form">
            <div class="form-row">
              <div class="form-group">
                <label for="c-name"><?php esc_html_e( 'Full Name *', 'lingo-house' ); ?></label>
                <input type="text" id="c-name" class="form-input" placeholder="<?php esc_attr_e( 'Your full name', 'lingo-house' ); ?>" required>
                <div class="form-error-msg" id="err-name"><?php esc_html_e( 'Please enter your name', 'lingo-house' ); ?></div>
              </div>
              <div class="form-group">
                <label for="c-email"><?php esc_html_e( 'Email Address *', 'lingo-house' ); ?></label>
                <input type="email" id="c-email" class="form-input" placeholder="your@email.com" required>
                <div class="form-error-msg" id="err-email"><?php esc_html_e( 'Please enter a valid email', 'lingo-house' ); ?></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="c-phone"><?php esc_html_e( 'Phone Number', 'lingo-house' ); ?></label>
                <input type="tel" id="c-phone" class="form-input" placeholder="+971 XX XXX XXXX">
              </div>
              <div class="form-group">
                <label for="c-subject"><?php esc_html_e( 'Subject *', 'lingo-house' ); ?></label>
                <select id="c-subject" class="form-select" required>
                  <option value=""><?php esc_html_e( 'Select a subject', 'lingo-house' ); ?></option>
                  <option value="enrollment"><?php esc_html_e( 'Course Enrollment', 'lingo-house' ); ?></option>
                  <option value="info"><?php esc_html_e( 'General Information', 'lingo-house' ); ?></option>
                  <option value="corporate"><?php esc_html_e( 'Corporate Training', 'lingo-house' ); ?></option>
                  <option value="kids"><?php esc_html_e( 'Kids Courses', 'lingo-house' ); ?></option>
                </select>
                <div class="form-error-msg" id="err-subject"><?php esc_html_e( 'Please select a subject', 'lingo-house' ); ?></div>
              </div>
            </div>
            <div class="form-group">
              <label for="c-message"><?php esc_html_e( 'Message *', 'lingo-house' ); ?></label>
              <textarea id="c-message" class="form-input" placeholder="<?php esc_attr_e( 'How can we help you?', 'lingo-house' ); ?>" rows="5" required></textarea>
              <div class="form-error-msg" id="err-message"><?php esc_html_e( 'Please enter your message', 'lingo-house' ); ?></div>
            </div>
            <button type="submit" class="btn-submit">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              <?php esc_html_e( 'Send Message', 'lingo-house' ); ?>
            </button>
          </form>
        </div>

        <div class="contact-sidebar anim" style="transition-delay:.15s">
          <div class="sidebar-card">
            <h4><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> <?php esc_html_e( 'Office Hours', 'lingo-house' ); ?></h4>
            <div class="office-hours-list">
              <div class="oh-item"><span class="oh-day"><?php esc_html_e( 'Saturday – Wednesday', 'lingo-house' ); ?></span><span class="oh-time">9:00 AM – 9:00 PM</span></div>
              <div class="oh-item"><span class="oh-day"><?php esc_html_e( 'Thursday', 'lingo-house' ); ?></span><span class="oh-time">9:00 AM – 9:00 PM</span></div>
              <div class="oh-item"><span class="oh-day"><?php esc_html_e( 'Friday', 'lingo-house' ); ?></span><span class="oh-time"><?php esc_html_e( 'Closed', 'lingo-house' ); ?></span></div>
            </div>
          </div>

          <div class="sidebar-card">
            <h4><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg> <?php esc_html_e( 'Follow Us', 'lingo-house' ); ?></h4>
            <div class="social-links-list">
              <?php if ( $url = lingo_house_get_social( 'instagram' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" class="social-link-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg> Instagram</a>
              <?php endif; ?>
              <?php if ( $url = lingo_house_get_social( 'facebook' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" class="social-link-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg> Facebook</a>
              <?php endif; ?>
              <?php if ( $url = lingo_house_get_social( 'linkedin' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" class="social-link-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg> LinkedIn</a>
              <?php endif; ?>
              <?php if ( $url = lingo_house_get_social( 'youtube' ) ) : ?>
                <a href="<?php echo esc_url( $url ); ?>" class="social-link-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg> YouTube</a>
              <?php endif; ?>
            </div>
          </div>

          <div class="sidebar-card">
            <h4><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg> <?php esc_html_e( 'Quick FAQ', 'lingo-house' ); ?></h4>
            <div class="faq-links-list">
              <a href="<?php echo esc_url( home_url( '#faq' ) ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> <?php esc_html_e( 'How do I enroll?', 'lingo-house' ); ?></a>
              <a href="<?php echo esc_url( home_url( '#faq' ) ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> <?php esc_html_e( 'What are the payment options?', 'lingo-house' ); ?></a>
              <a href="<?php echo esc_url( home_url( '#faq' ) ); ?>"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg> <?php esc_html_e( 'Can I get a free trial?', 'lingo-house' ); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div class="map-placeholder anim">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <?php echo esc_html( lingo_house_get_contact( 'address' ) ?: __( 'Dubai Knowledge Village, Block 11 — Interactive Map', 'lingo-house' ) ); ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

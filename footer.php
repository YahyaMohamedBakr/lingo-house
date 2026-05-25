  <!-- ========== FOOTER CTA ========== -->
  <div class="footer-cta">
    <div class="container">
      <div>
        <h3><?php esc_html_e( 'Ready to Start Your Language Journey?', 'lingo-house' ); ?></h3>
        <p><?php esc_html_e( 'Join thousands of students who have chosen Lingo House', 'lingo-house' ); ?></p>
      </div>
      <button class="btn-white-ghost"><?php esc_html_e( 'Register Now', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
    </div>
  </div>

  <!-- ========== FOOTER ========== -->
  <footer class="footer" id="contact">
    <div class="footer-main">
      <div class="container">
        <div class="footer-grid">

          <div class="footer-about">
            <?php if ( is_active_sidebar( 'footer-about' ) ) : ?>
              <?php dynamic_sidebar( 'footer-about' ); ?>
            <?php else : ?>
              <div style="display:flex;align-items:center;gap:10px;margin-bottom:14px">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<img src="' . esc_url( LINGO_HOUSE_URI . '/logo.jpeg' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" width="36" height="36" style="border-radius:6px">';
                }
                ?>
                <div><div style="font-size:16px;font-weight:700;color:#fff"><?php bloginfo( 'name' ); ?></div><div style="font-size:9px;color:rgba(255,255,255,.5);letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Institute', 'lingo-house' ); ?></div></div>
              </div>
              <p><?php esc_html_e( 'KHDA accredited language school providing high-quality language education for adults, kids, and corporate clients.', 'lingo-house' ); ?></p>
              <div class="footer-social">
                <?php if ( $url = lingo_house_get_social( 'instagram' ) ) : ?>
                  <a href="<?php echo esc_url( $url ); ?>" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                <?php endif; ?>
                <?php if ( $url = lingo_house_get_social( 'facebook' ) ) : ?>
                  <a href="<?php echo esc_url( $url ); ?>" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                <?php endif; ?>
                <?php if ( $url = lingo_house_get_social( 'linkedin' ) ) : ?>
                  <a href="<?php echo esc_url( $url ); ?>" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
                <?php endif; ?>
                <?php if ( $url = lingo_house_get_social( 'youtube' ) ) : ?>
                  <a href="<?php echo esc_url( $url ); ?>" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19.1c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg></a>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>

          <div>
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
              <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php else : ?>
              <h4><?php esc_html_e( 'Company', 'lingo-house' ); ?></h4>
              <ul>
                <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About Us', 'lingo-house' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'Reviews', 'lingo-house' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'News', 'lingo-house' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'Careers', 'lingo-house' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'Business Training', 'lingo-house' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'lingo-house' ); ?></a></li>
              </ul>
            <?php endif; ?>
          </div>

          <div>
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
              <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php else : ?>
              <h4><?php esc_html_e( 'Courses', 'lingo-house' ); ?></h4>
              <ul>
                <li><a href="<?php echo esc_url( get_post_type_archive_link( 'course' ) ); ?>"><?php esc_html_e( 'All Courses', 'lingo-house' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'German', 'lingo-house' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'English', 'lingo-house' ); ?></a></li>
                <li><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'Arabic', 'lingo-house' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'Online Courses', 'lingo-house' ); ?></a></li>
                <li><a href="#"><?php esc_html_e( 'Courses for Kids', 'lingo-house' ); ?></a></li>
              </ul>
            <?php endif; ?>
          </div>

          <div>
            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
              <?php dynamic_sidebar( 'footer-3' ); ?>
            <?php else : ?>
              <h4><?php esc_html_e( 'Contact Us', 'lingo-house' ); ?></h4>
              <div class="footer-contact-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span><?php echo esc_html( lingo_house_get_contact( 'address' ) ); ?></span>
              </div>
              <div class="footer-contact-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 3.68 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.81.36 1.6.65 2.36a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.76.29 1.55.52 2.36.65a2 2 0 0 1 1.72 2v3z"/></svg>
                <a href="tel:<?php echo esc_attr( lingo_house_get_contact( 'phone' ) ); ?>"><?php echo esc_html( lingo_house_get_contact( 'phone' ) ); ?></a>
              </div>
              <div class="footer-contact-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                <a href="mailto:<?php echo esc_attr( lingo_house_get_contact( 'email' ) ); ?>"><?php echo esc_html( lingo_house_get_contact( 'email' ) ); ?></a>
              </div>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <span>&copy; <?php echo esc_html( get_theme_mod( 'lingo_house_copyright', date( 'Y' ) . ' Lingo House. All rights reserved.' ) ); ?></span>
        <div class="footer-bottom-links">
          <a href="#"><?php esc_html_e( 'Privacy Policy', 'lingo-house' ); ?></a>
          <span style="color:rgba(255,255,255,.15)">|</span>
          <a href="#"><?php esc_html_e( 'Terms & Conditions', 'lingo-house' ); ?></a>
          <span style="color:rgba(255,255,255,.15)">|</span>
          <a href="#"><?php esc_html_e( 'Cookie Policy', 'lingo-house' ); ?></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Back to Top -->
  <button class="back-top" aria-label="<?php esc_attr_e( 'Back to top', 'lingo-house' ); ?>">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg>
  </button>

  <?php wp_footer(); ?>
</body>
</html>

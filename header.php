<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0f2d87">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
?>

  <!-- ========== TOP BAR ========== -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-left">
        <button class="lang-btn">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10A15.3 15.3 0 0 1 12 2z"/></svg>
          EN | DE
        </button>
        <?php
        if ( has_nav_menu( 'top-bar' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'top-bar',
                'container'      => false,
                'menu_class'     => 'top-links',
                'depth'          => 1,
                'fallback_cb'    => false,
            ) );
        } else {
            ?>
            <div class="top-links">
              <a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About Us', 'lingo-house' ); ?></a>
              <a href="#"><?php esc_html_e( 'Reviews', 'lingo-house' ); ?></a>
              <a href="<?php echo esc_url( home_url( '/news' ) ); ?>"><?php esc_html_e( 'News', 'lingo-house' ); ?></a>
              <a href="#"><?php esc_html_e( 'Careers', 'lingo-house' ); ?></a>
              <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'lingo-house' ); ?></a>
            </div>
            <?php
        }
        ?>
        <div class="search-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          <input type="text" placeholder="<?php esc_attr_e( 'Search...', 'lingo-house' ); ?>">
        </div>
      </div>
      <div class="top-bar-right">
        <a href="tel:<?php echo esc_attr( lingo_house_get_contact( 'phone' ) ); ?>" class="phone-top">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 3.68 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.81.36 1.6.65 2.36a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.76.29 1.55.52 2.36.65a2 2 0 0 1 1.72 2v3z"/></svg>
          <?php echo esc_html( lingo_house_get_contact( 'phone' ) ); ?>
        </a>
        <button class="btn-callback"><?php esc_html_e( 'Call Back', 'lingo-house' ); ?></button>
        <div class="auth-top">
          <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg> <?php esc_html_e( 'Login', 'lingo-house' ); ?></a>
          <span style="color:rgba(255,255,255,.25)">/</span>
          <a href="#"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> <?php esc_html_e( 'Registration', 'lingo-house' ); ?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== MAIN NAV ========== -->
  <nav class="main-nav">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        <?php
        if ( has_custom_logo() ) {
            the_custom_logo();
        } else {
            echo '<img src="' . esc_url( LINGO_HOUSE_URI . '/logo.jpeg' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" width="38" height="38">';
        }
        ?>
        <div class="logo-text">
          <div class="logo-text-main"><?php bloginfo( 'name' ); ?></div>
          <div class="logo-text-sub"><?php esc_html_e( 'Institute', 'lingo-house' ); ?></div>
        </div>
      </a>

      <?php
      if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'nav-list',
              'depth'          => 2,
              'fallback_cb'    => false,
              'walker'         => new Lingo_House_Walker_Nav(),
          ) );
      } else {
          ?>
          <ul class="nav-list">
            <li class="nav-item">
              <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="nav-link"><?php esc_html_e( 'Courses', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></a>
              <div class="dropdown">
                <div class="dropdown-label"><?php esc_html_e( 'Languages', 'lingo-house' ); ?></div>
                <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'German', 'lingo-house' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'Arabic', 'lingo-house' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'English', 'lingo-house' ); ?></a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-label"><?php esc_html_e( 'Course Types', 'lingo-house' ); ?></div>
                <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'Regular', 'lingo-house' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'Intensive', 'lingo-house' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'Online', 'lingo-house' ); ?></a>
              </div>
            </li>
            <li class="nav-item"><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="nav-link"><?php esc_html_e( 'Online Courses', 'lingo-house' ); ?></a></li>
            <li class="nav-item"><a href="<?php echo esc_url( home_url( '/courses-kids' ) ); ?>" class="nav-link"><?php esc_html_e( 'Courses for Kids', 'lingo-house' ); ?></a></li>
            <li class="nav-item"><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="nav-link"><?php esc_html_e( 'About', 'lingo-house' ); ?></a></li>
            <li class="nav-item"><a href="<?php echo esc_url( home_url( '/corporates' ) ); ?>" class="nav-link"><?php esc_html_e( 'Corporates', 'lingo-house' ); ?></a></li>
          </ul>
          <?php
      }
      ?>

      <div class="nav-right">
        <a href="tel:<?php echo esc_attr( lingo_house_get_contact( 'phone' ) ); ?>" class="phone-top" style="display:none">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--primary);width:18px;height:18px"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 3.68 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.81.36 1.6.65 2.36a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.76.29 1.55.52 2.36.65a2 2 0 0 1 1.72 2v3z"/></svg>
        </a>
        <button class="btn-login"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg> <?php esc_html_e( 'Login', 'lingo-house' ); ?></button>
        <button class="btn-register"><?php esc_html_e( 'Registration', 'lingo-house' ); ?></button>
      </div>

      <button class="mobile-toggle" aria-label="<?php esc_attr_e( 'Menu', 'lingo-house' ); ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <div class="mobile-overlay">
    <div class="mobile-panel">
      <div class="mobile-panel-head">
        <div class="logo-text"><div class="logo-text-main"><?php bloginfo( 'name' ); ?></div><div class="logo-text-sub"><?php esc_html_e( 'Institute', 'lingo-house' ); ?></div></div>
        <button class="mobile-close"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
      </div>
      <div class="mobile-body">
        <?php
        if ( has_nav_menu( 'mobile' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'mobile',
                'container'      => false,
                'menu_class'     => '',
                'depth'          => 2,
                'fallback_cb'    => false,
            ) );
        } else {
            ?>
            <button data-toggle="mob-courses"><?php esc_html_e( 'Courses', 'lingo-house' ); ?> <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
            <div class="mobile-sub" id="mob-courses">
              <div class="dropdown-label"><?php esc_html_e( 'Languages', 'lingo-house' ); ?></div>
              <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'German', 'lingo-house' ); ?></a>
              <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'Arabic', 'lingo-house' ); ?></a>
              <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'English', 'lingo-house' ); ?></a>
            </div>
            <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>"><?php esc_html_e( 'Online Courses', 'lingo-house' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/courses-kids' ) ); ?>"><?php esc_html_e( 'Courses for Kids', 'lingo-house' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/corporates' ) ); ?>"><?php esc_html_e( 'Corporates', 'lingo-house' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" style="margin-top:12px;padding-top:16px;border-top:1px solid var(--gray-200)"><?php esc_html_e( 'About Us', 'lingo-house' ); ?></a>
            <a href="#"><?php esc_html_e( 'Reviews', 'lingo-house' ); ?></a>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'lingo-house' ); ?></a>
            <?php
        }
        ?>
      </div>
      <div class="mobile-footer">
        <button class="btn-login" style="width:100%;justify-content:center;padding:12px;border:1px solid var(--gray-200);border-radius:var(--radius)"><?php esc_html_e( 'Login', 'lingo-house' ); ?></button>
        <button class="btn-register" style="width:100%;text-align:center;padding:12px"><?php esc_html_e( 'Registration', 'lingo-house' ); ?></button>
      </div>
    </div>
  </div>

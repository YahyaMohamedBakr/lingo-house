<?php
/**
 * Lingo House Theme Functions
 *
 * @package Lingo_House
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'LINGO_HOUSE_DIR', get_template_directory() );

require_once LINGO_HOUSE_DIR . '/inc/class-lingo-house-walker-nav.php';

define( 'LINGO_HOUSE_VERSION', '1.0.0' );
define( 'LINGO_HOUSE_DIR', get_template_directory() );
define( 'LINGO_HOUSE_URI', get_template_directory_uri() );

/* ── Theme Setup ── */
function lingo_house_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );

    load_theme_textdomain( 'lingo-house', LINGO_HOUSE_DIR . '/languages' );

    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'lingo-house' ),
        'top-bar'   => esc_html__( 'Top Bar Menu', 'lingo-house' ),
        'footer-1'  => esc_html__( 'Footer Column 1', 'lingo-house' ),
        'footer-2'  => esc_html__( 'Footer Column 2', 'lingo-house' ),
        'mobile'    => esc_html__( 'Mobile Menu', 'lingo-house' ),
    ) );
}
add_action( 'after_setup_theme', 'lingo_house_setup' );

/* ── Enqueue Scripts & Styles ── */
function lingo_house_assets() {
    wp_enqueue_style( 'lingo-house-style', get_stylesheet_uri(), array(), LINGO_HOUSE_VERSION );

    wp_enqueue_script( 'lingo-house-script', LINGO_HOUSE_URI . '/script.js', array(), LINGO_HOUSE_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'lingo_house_assets' );

/* ── Register Custom Post Type: Course ── */
function lingo_house_register_course_cpt() {
    $labels = array(
        'name'                  => esc_html__( 'Courses', 'lingo-house' ),
        'singular_name'         => esc_html__( 'Course', 'lingo-house' ),
        'add_new'               => esc_html__( 'Add New', 'lingo-house' ),
        'add_new_item'          => esc_html__( 'Add New Course', 'lingo-house' ),
        'edit_item'             => esc_html__( 'Edit Course', 'lingo-house' ),
        'new_item'              => esc_html__( 'New Course', 'lingo-house' ),
        'view_item'             => esc_html__( 'View Course', 'lingo-house' ),
        'search_items'          => esc_html__( 'Search Courses', 'lingo-house' ),
        'not_found'             => esc_html__( 'No courses found', 'lingo-house' ),
        'not_found_in_trash'    => esc_html__( 'No courses found in Trash', 'lingo-house' ),
        'all_items'             => esc_html__( 'All Courses', 'lingo-house' ),
        'menu_name'             => esc_html__( 'Courses', 'lingo-house' ),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'rewrite'             => array( 'slug' => 'courses', 'with_front' => false ),
        'taxonomies'          => array( 'language', 'course-type' ),
    );

    register_post_type( 'course', $args );
}
add_action( 'init', 'lingo_house_register_course_cpt' );

/* ── Register Taxonomy: Language ── */
function lingo_house_register_language_taxonomy() {
    $labels = array(
        'name'              => esc_html__( 'Languages', 'lingo-house' ),
        'singular_name'     => esc_html__( 'Language', 'lingo-house' ),
        'search_items'      => esc_html__( 'Search Languages', 'lingo-house' ),
        'all_items'         => esc_html__( 'All Languages', 'lingo-house' ),
        'parent_item'       => esc_html__( 'Parent Language', 'lingo-house' ),
        'parent_item_colon' => esc_html__( 'Parent Language:', 'lingo-house' ),
        'edit_item'         => esc_html__( 'Edit Language', 'lingo-house' ),
        'update_item'       => esc_html__( 'Update Language', 'lingo-house' ),
        'add_new_item'      => esc_html__( 'Add New Language', 'lingo-house' ),
        'new_item_name'     => esc_html__( 'New Language Name', 'lingo-house' ),
        'menu_name'         => esc_html__( 'Languages', 'lingo-house' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'language', 'with_front' => false ),
    );

    register_taxonomy( 'language', array( 'course' ), $args );
}
add_action( 'init', 'lingo_house_register_language_taxonomy' );

/* ── Register Taxonomy: Course Type ── */
function lingo_house_register_course_type_taxonomy() {
    $labels = array(
        'name'              => esc_html__( 'Course Types', 'lingo-house' ),
        'singular_name'     => esc_html__( 'Course Type', 'lingo-house' ),
        'search_items'      => esc_html__( 'Search Course Types', 'lingo-house' ),
        'all_items'         => esc_html__( 'All Course Types', 'lingo-house' ),
        'parent_item'       => esc_html__( 'Parent Course Type', 'lingo-house' ),
        'parent_item_colon' => esc_html__( 'Parent Course Type:', 'lingo-house' ),
        'edit_item'         => esc_html__( 'Edit Course Type', 'lingo-house' ),
        'update_item'       => esc_html__( 'Update Course Type', 'lingo-house' ),
        'add_new_item'      => esc_html__( 'Add New Course Type', 'lingo-house' ),
        'new_item_name'     => esc_html__( 'New Course Type', 'lingo-house' ),
        'menu_name'         => esc_html__( 'Course Types', 'lingo-house' ),
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'course-type', 'with_front' => false ),
    );

    register_taxonomy( 'course-type', array( 'course' ), $args );
}
add_action( 'init', 'lingo_house_register_course_type_taxonomy' );

/* ── FLush Rewrite on Theme Switch ── */
function lingo_house_activate() {
    lingo_house_register_course_cpt();
    lingo_house_register_language_taxonomy();
    lingo_house_register_course_type_taxonomy();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'lingo_house_activate' );

/* ── Register Sidebars ── */
function lingo_house_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'lingo-house' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'lingo-house' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer About', 'lingo-house' ),
        'id'            => 'footer-about',
        'description'   => esc_html__( 'Footer about section', 'lingo-house' ),
        'before_widget' => '<div id="%1$s" class="footer-about-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    for ( $i = 1; $i <= 3; $i++ ) {
        register_sidebar( array(
            'name'          => sprintf( esc_html__( 'Footer Column %d', 'lingo-house' ), $i ),
            'id'            => "footer-{$i}",
            'description'   => sprintf( esc_html__( 'Footer widget column %d', 'lingo-house' ), $i ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );
    }
}
add_action( 'widgets_init', 'lingo_house_widgets_init' );

/* ── Customizer ── */
function lingo_house_customize_register( $wp_customize ) {

    /* Contact Info Section */
    $wp_customize->add_section( 'lingo_house_contact', array(
        'title'    => esc_html__( 'Contact Info', 'lingo-house' ),
        'priority' => 30,
    ) );

    $contact_settings = array(
        'phone' => array(
            'label' => esc_html__( 'Phone Number', 'lingo-house' ),
            'type'  => 'text',
        ),
        'phone_secondary' => array(
            'label' => esc_html__( 'Secondary Phone', 'lingo-house' ),
            'type'  => 'text',
        ),
        'email' => array(
            'label' => esc_html__( 'Email Address', 'lingo-house' ),
            'type'  => 'email',
        ),
        'email_secondary' => array(
            'label' => esc_html__( 'Secondary Email', 'lingo-house' ),
            'type'  => 'email',
        ),
        'address' => array(
            'label' => esc_html__( 'Address', 'lingo-house' ),
            'type'  => 'textarea',
        ),
    );

    foreach ( $contact_settings as $key => $setting ) {
        $wp_customize->add_setting( "lingo_house_{$key}", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( "lingo_house_{$key}", array(
            'label'       => $setting['label'],
            'section'     => 'lingo_house_contact',
            'type'        => $setting['type'],
            'settings'    => "lingo_house_{$key}",
        ) );
    }

    /* Social Links Section */
    $wp_customize->add_section( 'lingo_house_social', array(
        'title'    => esc_html__( 'Social Links', 'lingo-house' ),
        'priority' => 35,
    ) );

    $social_settings = array( 'facebook', 'instagram', 'linkedin', 'youtube', 'whatsapp' );
    foreach ( $social_settings as $social ) {
        $wp_customize->add_setting( "lingo_house_social_{$social}", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( "lingo_house_social_{$social}", array(
            'label'       => ucfirst( $social ),
            'section'     => 'lingo_house_social',
            'type'        => 'url',
            'settings'    => "lingo_house_social_{$social}",
        ) );
    }

    /* Hero Section */
    $wp_customize->add_section( 'lingo_house_hero', array(
        'title'    => esc_html__( 'Hero Section', 'lingo-house' ),
        'priority' => 40,
    ) );

    $hero_settings = array(
        'hero_title' => array(
            'label' => esc_html__( 'Hero Title', 'lingo-house' ),
            'default' => esc_html__( 'Your language center in Dubai Knowledge Village', 'lingo-house' ),
        ),
        'hero_subtitle' => array(
            'label' => esc_html__( 'Hero Subtitle', 'lingo-house' ),
            'default' => esc_html__( 'Providing face-to-face and online classes for adults, kids, corporate clients and schools.', 'lingo-house' ),
        ),
        'hero_badge' => array(
            'label' => esc_html__( 'Hero Badge Text', 'lingo-house' ),
            'default' => esc_html__( 'Now Enrolling — Summer 2026', 'lingo-house' ),
        ),
    );

    foreach ( $hero_settings as $key => $setting ) {
        $wp_customize->add_setting( "lingo_house_{$key}", array(
            'default'           => $setting['default'],
            'sanitize_callback' => 'wp_kses_post',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( "lingo_house_{$key}", array(
            'label'       => $setting['label'],
            'section'     => 'lingo_house_hero',
            'type'        => 'text',
            'settings'    => "lingo_house_{$key}",
        ) );
    }

    /* Copyright */
    $wp_customize->add_setting( 'lingo_house_copyright', array(
        'default'           => esc_html__( '2026 Lingo House. All rights reserved.', 'lingo-house' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'lingo_house_copyright', array(
        'label'    => esc_html__( 'Copyright Text', 'lingo-house' ),
        'section'  => 'title_tagline',
        'type'     => 'text',
        'priority' => 50,
    ) );
}
add_action( 'customize_register', 'lingo_house_customize_register' );

/* ── Helper: Get Contact Info ── */
function lingo_house_get_contact( $key ) {
    return get_theme_mod( "lingo_house_{$key}", '' );
}

/* ── Helper: Get Social Link ── */
function lingo_house_get_social( $platform ) {
    return get_theme_mod( "lingo_house_social_{$platform}", '' );
}

/* ── Breadcrumbs ── */
function lingo_house_breadcrumb() {
    if ( is_front_page() ) {
        return;
    }

    echo '<div class="breadcrumb">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'lingo-house' ) . '</a>';

    if ( is_singular( 'course' ) ) {
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        echo '<a href="' . esc_url( get_post_type_archive_link( 'course' ) ) . '">' . esc_html__( 'Courses', 'lingo-house' ) . '</a>';
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        the_title( '<span>', '</span>' );
    } elseif ( is_post_type_archive( 'course' ) || is_tax( array( 'language', 'course-type' ) ) ) {
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        echo '<span>' . esc_html__( 'Courses', 'lingo-house' ) . '</span>';
    } elseif ( is_page() ) {
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        the_title( '<span>', '</span>' );
    } elseif ( is_single() ) {
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        the_title( '<span>', '</span>' );
    } elseif ( is_search() ) {
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        echo '<span>' . esc_html__( 'Search Results', 'lingo-house' ) . '</span>';
    } elseif ( is_404() ) {
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        echo '<span>' . esc_html__( '404 Not Found', 'lingo-house' ) . '</span>';
    } else {
        echo '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';
        echo '<span>' . get_the_archive_title() . '</span>';
    }

    echo '</div>';
}

/* ── Excerpt Length ── */
function lingo_house_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'lingo_house_excerpt_length' );

/* ── Body Class ── */
function lingo_house_body_classes( $classes ) {
    if ( is_admin_bar_showing() ) {
        $classes[] = 'admin-bar';
    }
    return $classes;
}
add_filter( 'body_class', 'lingo_house_body_classes' );

/* ── Get page ID by template ── */
function lingo_house_get_page_id_by_template( $template_name ) {
    $pages = get_pages( array(
        'meta_key'   => '_wp_page_template',
        'meta_value' => $template_name,
    ) );
    return ! empty( $pages ) ? $pages[0]->ID : 0;
}

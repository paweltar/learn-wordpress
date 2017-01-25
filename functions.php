<?php
/*
  ===============================
  Include Scripts
  ===============================
*/

function awesome_script_enqueue() {
  // css
  wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), '6.3.0', 'all');
  wp_enqueue_style('animatecss', get_template_directory_uri() . '/css/animate.css', array(), '3.5.1', 'all');
  wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick/slick.css', array(), '1.6.0', 'all');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick/slick-theme.css', array(), '1.6.0', 'all');
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
  // js
  wp_enqueue_script('jquery');
  wp_enqueue_script('slickjs', get_template_directory_uri(). '/js/slick/slick.min.js', array('jquery'), '1.6.0', true);
  wp_enqueue_script('foundationjs', get_template_directory_uri(). '/js/foundation.min.js', array('jquery'), '6.3.0', true);
  wp_enqueue_script('customjs', get_template_directory_uri(). '/js/awesome.js', array('jquery'), '1.0.0', true);

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

/*
  ===============================
  Activate Menus
  ===============================
*/

function awesome_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'awesome_theme_setup');

/*
  ===============================
  Theme support funcxtion
  ===============================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5',array('search-form'));

/*
  ===============================
  Sidebar funcxtion
  ===============================
*/

function awesome_widget_setup() {
  register_sidebar(array(

    'name' => 'Sidebar',
    'id' => 'sidebar-1',
    'class' => 'custom',
    'description' => 'Standard Sidebar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s>',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after-title' => '</h1>'

  ));
}

add_action('widgets_init','awesome_widget_setup');

add_image_size( 'search-thumb', 9999, 50 );

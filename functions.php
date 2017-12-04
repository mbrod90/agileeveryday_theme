<?php


  add_theme_support('menus');
  add_theme_support('post-thumbnails');

  function wpt_excerpt_length($length) {
    return 30;
  }

  add_filter('excerpt_length', 'wpt_excerpt_length', 999);

  function register_theme_menus() {
    register_nav_menus (
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'footer-menu' => __( 'Footer Menu' )

      )
    );
  }
  add_action( 'init', 'register_theme_menus');


  function wpt_create_widget( $name, $id, $description ) {

    register_sidebar(array(
      'name' => __( $name ),
      'id' => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="module-heading">',
      'after_title' => '</h2>'
    ));

  }

  wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
  wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


  function wpt_theme_styles() {
    wp_enqueue_style('foundation_css', get_template_directory_uri() . '/assets/sass/foundation.css');
    //wp_enqueue_style('normalize_css', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('googlefont_css', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');

  function wpt_theme_js() {
    wp_enqueue_script('google_js', 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js', '', '', false);
    wp_enqueue_script('modernizer_js', get_template_directory_uri() . '/assets/js/vendor/modernizr.js', '', '', false);
    wp_enqueue_script('foundation_js', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js', array('jquery'), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery', 'foundation_js'), '', true);

  }
  add_action('wp_enqueue_scripts', 'wpt_theme_js');
?>
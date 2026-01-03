<?php

require get_template_directory() . '/inc/customizer.php';

function cacao_load_files()
{
  wp_enqueue_style('main_style', get_stylesheet_uri(), array(), filemtime(
    get_template_directory() . '/style.css'
  ), 'all');
  wp_enqueue_style('cacao_google_fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap', array(), null);
  wp_enqueue_script('dropdown', get_theme_file_uri('/js/dropdown.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'cacao_load_files');


function cacao_config()
{
  add_theme_support('title-tag');
  $args = array(
    'height' => 225,
    'width' => 1920
  );
  add_theme_support('custom-header', $args);
  add_theme_support('automatic-feed-links');
  add_theme_support('html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption',
    'style',
    'script'
  ));
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', array(
    'width' => 200,
    'height' => 110,
    'flex-height' => true,
    'flex-width' => true
  ));
  register_nav_menus(array(
    'headerMenuLocation' => 'Menu header',
    'footerMenuLocation' => 'Footer header'
  ));
}

add_action('after_setup_theme', 'cacao_config', 0);

function cacao_widget()
{
  register_sidebar(array(
    'name'          => 'Blog Sidebar',
    'id'            => 'sidebar-blog',
    'description'   => 'This is a blog sidebar. You can add your widgets here.',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Service 1',
    'id'            => 'services-1',
    'description'   => 'First Service Area',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Service 2',
    'id'            => 'services-2',
    'description'   => 'Second Service Area',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Service 3',
    'id'            => 'services-3',
    'description'   => 'Third Service Area',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
}

add_action('widgets_init', 'cacao_widget');


if (!function_exists('wp_body_open')) {
  function wp_body_open()
  {
    do_action('wp_open_body');
  }
}

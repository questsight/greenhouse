<?php

show_admin_bar( false );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'excerpt_more', function( $more ) {
  return '...';
});

if ( ! function_exists( 'sequoia_setup' ) ) :
	function sequoia_setup() {
		load_theme_textdomain( 'sequoia', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'header' => esc_html__( 'Header Menu', 'sequoia' )
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'sequoia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 157,
			'width'       => 118,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'sequoia_setup' );

function sequoia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sequoia_content_width', 640 );
}
add_action( 'after_setup_theme', 'sequoia_content_width', 0 );


function sequoia_scripts() {
	wp_enqueue_style( 'sequoia-style', get_stylesheet_uri() );
    wp_enqueue_style('sequoia-vendor-css', get_template_directory_uri() . '/libs/css/vendor.min.css', array(), null, false);
    wp_enqueue_style('sequoia-common-css', get_template_directory_uri() . '/assets/css/common.min.css', array(), null, false);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('sequoia-vendor-js', get_template_directory_uri() . '/libs/js/vendor.min.js', array( 'jquery' ), null, true);
    wp_enqueue_script('sequoia-common-js', get_template_directory_uri() . '/assets/js/common.min.js', array( 'jquery' ), null, true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sequoia_scripts' );

//Дополнительные поля в настройках
add_action('customize_register', function($customizer){
  $customizer->add_section(
    'example_section_one',
    array(
      'title' => 'Контакты',
      'description' => 'Контакты',
      'priority' => 11,
    )
  );
  $customizer->add_setting(
    'example_phone',
    array('default' => '')
  );
  $customizer->add_control(
    'example_phone',
    array(
      'label' => 'Телефона',
      'section' => 'example_section_one',
      'type' => 'text',
    )
  );
  $customizer->add_setting(
    'example_email',
    array('default' => '')
  );
  $customizer->add_control(
    'example_email',
    array(
      'label' => 'E-mail',
      'section' => 'example_section_one',
      'type' => 'text',
    )
  );
  $customizer->add_setting(
    'example_address',
    array('default' => '')
  );
  $customizer->add_control(
    'example_address',
    array(
      'label' => 'Адрес',
      'section' => 'example_section_one',
      'type' => 'text',
    )
  );
});

//Filter
function go_filter() { 
	$args = array();
  $args['meta_query'] = array('relation' => 'AND');
	global $wp_query;
  
  if ($_REQUEST['size']) {
		$args['meta_query'][] = array(
			'key' => 'size', 
			'value' => $_REQUEST['size'],
      'type' => 'text',
      'compare' => 'IN'
			);
	}
  
  if ($_REQUEST['form']) {
		$args['meta_query'][] = array(
			'key' => 'form', 
			'value' => $_REQUEST['form'],
      'type' => 'text',
      'compare' => 'IN'
			);
	}
  
  if ($_REQUEST['purpose']) {
    $purposes = array('relation' => 'OR');
    foreach ($_REQUEST['purpose'] as $value){
		$purposes[] = array(
			'key' => 'purpose', 
			'value' => $value,
      'type' => 'text',
      'compare' => 'LIKE'
			);
    }
    $args['meta_query'][] = $purposes;
	}
    
  if ($_REQUEST['maker']) {
		$args['meta_query'][] = array(
			'key' => 'maker', 
			'value' => $_REQUEST['maker'],
      'type' => 'text',
      'compare' => 'IN'
			);
	}
  
	query_posts(array_merge($args,$wp_query->query));
}
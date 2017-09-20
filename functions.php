<?php
if ( ! function_exists( 'blank_setup' ) ) :
	function blank_setup() {
		load_theme_textdomain( 'intentionally-blank' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		// This theme allows users to set a custom background.
		add_theme_support( 'custom-background', apply_filters( 'intentionally_blank_custom_background_args', array(
			'default-color' => 'f5f5f5',
		) ) );

		add_theme_support( 'custom-logo' );
		add_theme_support( 'custom-logo', array(
			'height'      => 256,
			'width'       => 256,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		function blank_custom_logo() {
			if ( function_exists( 'the_custom_logo' ) ) {
				return get_custom_logo();
			}else{
				return '';
			}
		}
	}
endif; // blank_setup
add_action( 'after_setup_theme', 'blank_setup' );

function blank_customizer_cleanup($wp_customize){
	$wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'blank_customizer_cleanup');

function add_theme_scripts() {
wp_enqueue_style( 'jplist.demo-pages.min', get_template_directory_uri() . '/css/jplist.demo-pages.min.css',false,'1.1','all');
  
wp_enqueue_script( 'jquery-1.11.1.min', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', array ( 'jquery' ), 1.1, false);

wp_enqueue_style( 'jplist.core.min', get_template_directory_uri() . '/css/jplist.core.min.css',false,'1.1','all');
wp_enqueue_script( 'jplist.core.min', get_template_directory_uri() . '/js/jplist.core.min.js', array ( 'jquery' ), 1.1, false);

wp_enqueue_script( 'jplist.counter-control.min', get_template_directory_uri() . '/js/jplist.counter-control.min.js', array ( 'jquery' ), 1.1, false);

wp_enqueue_style( 'jplist.history-bundle.min', get_template_directory_uri() . '/css/jplist.history-bundle.min.css',false,'1.1','all');
wp_enqueue_script( 'jplist.history-bundle.min', get_template_directory_uri() . '/js/jplist.history-bundle.min.js', array ( 'jquery' ), 1.1, false);  
  
wp_enqueue_script( 'jplist.filter-toggle-bundle.min', get_template_directory_uri() . '/js/jplist.filter-toggle-bundle.min.js', array ( 'jquery' ), 1.1, false);
wp_enqueue_style( 'jplist.filter-toggle-bundle.min', get_template_directory_uri() . '/css/jplist.filter-toggle-bundle.min.css',false,'1.1','all');

wp_enqueue_script( 'jplist.sort-bundle.min', get_template_directory_uri() . '/js/jplist.sort-bundle.min.js', array ( 'jquery' ), 1.1, false);  

wp_enqueue_style( 'jplist.pagination-bundle.min', get_template_directory_uri() . '/css/jplist.pagination-bundle.min.css',false,'1.1','all');
wp_enqueue_script( 'jplist.pagination-bundle.min', get_template_directory_uri() . '/js/jplist.pagination-bundle.min.js', array ( 'jquery' ), 1.1, false);

wp_enqueue_script( 'jplist.textbox-filter.min', get_template_directory_uri() . '/js/jplist.textbox-filter.min.js', array ( 'jquery' ), 1.1, false);
wp_enqueue_style( 'jplist.textbox-filter.min', get_template_directory_uri() . '/css/jplist.textbox-filter.min.css',false,'1.1','all');

  
  
wp_enqueue_script( 'jquery.collapse', get_template_directory_uri() . '/js/src/jquery.collapse.js', array ( 'jquery' ), 1.1, false);  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
<?php
/**
 * Function describe for simple-store 
 * 
 * @package simple-store
 */
 
add_action( 'wp_enqueue_scripts', 'simple_store_enqueue_styles', 999 );
function simple_store_enqueue_styles() {
  $parent_style = 'simple-store-parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'simple-store-child-style',
        get_stylesheet_uri(),
        array( $parent_style )
    );
}


function simple_store_theme_setup() {
    
    load_child_theme_textdomain( 'simple-store', get_stylesheet_directory() . '/languages' );
    		
		// Add Custom Background Support
		$args = array(
			'default-color' => 'ffffff',
		);
		add_theme_support( 'custom-background', $args );
		
		// Add Custom logo Support
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		) );
    // add new theme option to customizer
    if ( ! class_exists( 'Kirki' ) ) {
    	return;
    }
    Kirki::add_field( 'simple_store_settings', array(
  		'type'        => 'code',
  		'settings'    => 'header-banner',
  		'label'       => __( 'Header Banner', 'simple-store' ),
  		'help'        => __( 'Add your HTML code with your banner.', 'simple-store' ),
  		'section'     => 'layout_section',
  		'choices'     => array(
      	'language' => 'html',
      	'theme'    => 'monokai',
      	'height'   => 100,
      ),
  		'priority'    => 10,
  	) ); 
}
add_action( 'after_setup_theme', 'simple_store_theme_setup' );

add_action( 'widgets_init', 'simple_store_widgets_init' );

function simple_store_widgets_init() {
  register_sidebar(
	array(
		'name'			 => __( 'Homepage Sidebar', 'simple-store' ),
		'id'			   => 'simple-store-home-sidebar',
		'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'	 => '</aside>',
		'before_title'	 => '<h3>',
		'after_title'	 => '</h3>',
	) );
}

function simple_store_custom_remove( $wp_customize ) {
    
    $wp_customize->remove_control( 'header-logo' );
    $wp_customize->remove_control( 'infobox-text-right' );
    $wp_customize->remove_section( 'site_bg_section' );
    $wp_customize->remove_section( 'search_bar_section' );
}

add_action( 'customize_register', 'simple_store_custom_remove', 100);





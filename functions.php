<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


// Hello World Test Shortcode function
function test_hello_world_shortcode() {
    return '<div style="padding: 20px; background: #f0f0f0; border: 2px solid #0073aa; border-radius: 8px; text-align: center; font-family: Arial, sans-serif;">
                <h2>🎉 Hello World! 🎉</h2>
                <p>Your child theme is working correctly!</p>
                <p>GitHub → Hostinger auto-deployment is successful!</p>
            </div>';
}
add_shortcode('hello_world', 'test_hello_world_shortcode');
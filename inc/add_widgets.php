<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Widgets
 */
if ( !function_exists('wtp_widgets_init_child') ) {

    function wtp_widgets_init_child()
    {
    
        register_sidebar(array(
            'name'          => 'Footer 1',
            'id'            => 'footer-1',
            'description'   => 'Footer Widget',
        ));
    }
    add_action('widgets_init', 'wtp_widgets_init_child', 100);
    
}
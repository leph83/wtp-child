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
            'name'          => 'Topbar',
            'id'            => 'top_bar',
            'description'   => 'above the header',
        ));

        register_sidebar(array(
            'name'          => 'Bottom Bar',
            'id'            => 'bottom_bar',
            'description'   => 'The very bottom of the page',
        ));

        register_sidebar(array(
            'name'          => 'Footer',
            'id'            => 'footer',
            'description'   => 'Footer Widget',
        ));
    }
    add_action('widgets_init', 'wtp_widgets_init_child', 100);
    
}
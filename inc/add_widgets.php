<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Widgets
 */
if ( !function_exists('wtp_widgets_init_child') ) {
    function wtp_widgets_init_child() {

        register_sidebar(array(
            'name'          => 'Sidebar',
            'id'            => 'primary-widget-area',
            'description'   => 'Sidebar Widgets',
        ) );

        register_sidebar(array(
            'name'          => 'Footer 1',
            'id'            => 'footer-1-widget-area',
            'description'   => 'Footer 1 Widgets',
        ) );

    }
    add_action( 'widgets_init', 'wtp_widgets_init_child' );
}
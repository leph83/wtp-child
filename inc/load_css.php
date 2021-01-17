<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!function_exists('wtp_load_styles_child')) {
function wtp_load_styles_child()
    {
        // Version dependend on change date of file
        $file_name = 'style.css';
        if (file_exists( get_stylesheet_directory() . '/style.min.css')) {
            $file_name = 'style.min.css';
        }

        $css_version = filemtime(get_stylesheet_directory() . '/' . $file_name);

        // PARENT STYLE
        wp_enqueue_style('wtp-phucstrap', get_template_directory_uri() . '/' . $file_name, array(), $css_version);

        // CHILD THEME  STYLE
        wp_enqueue_style('wtp-theme', get_stylesheet_directory_uri() . '/' . $file_name, array('wtp-phucstrap'), $css_version);
    }
    add_action('wp_enqueue_scripts', 'wtp_load_styles_child');
}
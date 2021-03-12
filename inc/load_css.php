<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!function_exists('wtp_load_styles_child')) {
    function wtp_load_styles_child()
    {
        $css_path = '/assets/css/theme/';

        $css_files = array(
            '01-settings/setting.fonts.css',
            '01-settings/setting.variables.css',

            '06-components/component.layout.css',
            '06-components/component.header.css',
            '06-components/component.footer.css',

            '06-components/component.nav.css',
            '06-components/component.nav.mobile.css',
            '06-components/component.nav.desktop.css',

            '06-components/component.wordpress.css',
            '06-components/component.phuctenberg.css',
            '06-components/component.gutenberg.custom.css',

            //'06-components/component.gutenberg.css',
            // '06-components/component.blocks.css',
            // '06-components/component.form.css',
        );

        // STYLES
        $css_id = 0;
        foreach ($css_files as $css_file) {
            $css_version = filemtime(get_stylesheet_directory() . $css_path . $css_file);

            wp_enqueue_style('wtp-child-' . $css_id, get_stylesheet_directory_uri() . $css_path . $css_file, false, $css_version);
            $css_id++;
        }
    }
    add_action('wp_enqueue_scripts', 'wtp_load_styles_child', 99);
}

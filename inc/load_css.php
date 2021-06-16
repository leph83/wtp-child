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

            '06-components/component.body.css',

            '06-components/component.header.css',
            '06-components/component.footer.css',

            '06-components/component.nav.css',
            '06-components/component.nav.mobile.css',
            '06-components/component.nav.desktop.css',
            
            '06-components/component.sections.css',
            '06-components/component.blocks.css',
            '06-components/component.layout.css',
            
            '06-components/component.form.css',

            '06-components/component.gutenberg.custom.css',
        );

        // STYLES
        foreach ($css_files as $key => $css_file) {
            $css_version = filemtime(get_stylesheet_directory() . $css_path . $css_file);

            wp_enqueue_style('wtp-child-' . $key, get_stylesheet_directory_uri() . $css_path . $css_file, false, $css_version);
        }
    }
    add_action('wp_enqueue_scripts', 'wtp_load_styles_child', 100);
}

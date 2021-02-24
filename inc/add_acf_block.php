<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!function_exists('wtp_acf_blocks_init') && function_exists('acf_register_block_type')) {
    function wtp_acf_blocks_init()
    {
        acf_register_block_type(array(
            'name'              => 'intro_big',
            'title'             => __('Big Intro', 'wtp-child'),
            'description'       => __('A big title with description and links', 'wtp-child'),
            'render_template'   => 'template-parts/blocks/intro_big.php',
            'category'          => 'general',
        ));
    }

    add_action('acf/init', 'wtp_acf_blocks_init');
}

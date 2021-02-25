<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<article>
    <h1>
        <?php echo __('404', 'wtp-child'); ?>
    </h1>

    <p><?php echo __('Nothing to see here', 'wtp-child'); ?></p>

    <a class="" href="<?php echo get_home_url(); ?>"><?php echo __('back to homepage', 'wtp-child'); ?></a>
</article>

<?php get_footer();

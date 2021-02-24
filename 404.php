<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<article>
    <h1 class="page__title">
        <?php esc_html_e('404', 'test'); ?>
    </h1>

    <p><?php esc_html_e('This is not the page you were looking for. Keep moving', 'test'); ?></p>

    <a class="btn  btn--primary" href="<?php echo get_home_url(); ?>">proceed to home page</a>
</article>

<?php get_footer();

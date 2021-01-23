<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

</main>

<footer id="footer" class="footer">
    <section class="footer__content  lc lc--2  padding-left  padding-right">
        <h2 class="screen-reader-text"><?php echo __('Footer', 'wtp-child'); ?></h2>

        <div class="footer__item">
            &copy;<?php echo date('Y'); ?> - <?php echo get_bloginfo('name'); ?>
        </div>

        <div class="footer__item">
            <?php get_template_part('template-parts/footer/footer-nav'); ?>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>
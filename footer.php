<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<?php if (is_active_sidebar('sidebar-1')) : ?>
    <aside class="footer__top">
        <div class="footer__topcontent">
            <ul class="widget">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </ul>
        </div>
    </aside>
<?php endif; ?>

</main>

<footer id="footer" class="footer">
    <section class="footer__content  lc  lc--2  lc--padding">
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
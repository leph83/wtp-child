<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content/content'); ?>

        <?php endwhile; ?>

    <?php else : ?>
        <?php get_template_part('template-parts/content/content', 'none'); ?>
    <?php endif; ?>

<?php get_footer();

<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$title = (int) $wp_query->found_posts . ' ' . __('results for', 'test');
if ((int) $wp_query->found_posts == 1) {
    $title = (int) $wp_query->found_posts . ' ' . __('result for', 'test');
}

$title = $title . ' <span>"' . esc_html(get_search_query()) . '"</span>';


?>
<section>

    <h2 class=""><?php echo $title; ?></h2>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content/content', 'overview'); ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>
        <?php get_template_part('template-parts/content/content', 'none'); ?>
    <?php endif; ?>

</section>

<?php get_footer();

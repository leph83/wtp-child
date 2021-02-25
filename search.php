<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

// $title = (int) $wp_query->found_posts . ' ' . __('Search for:');
// if ((int) $wp_query->found_posts == 1) {
//     $title = (int) $wp_query->found_posts . ' ' . __('result for');
// }

$searchquery = esc_html(get_search_query());

$title .= '"' . $searchquery . '" - ' . __('Search Results') . ': ' . $wp_query->found_posts;

?>
<section>

    <h1><?php echo $title; ?></h1>

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

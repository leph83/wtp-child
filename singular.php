<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('template-parts/content/content', get_post_type()); ?>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

<?php else : ?>
    <?php get_template_part('template-parts/content/content', 'none'); ?>
<?php endif; ?>

<?php wp_link_pages(array(
    'before' => '<div>',
    'after' => '</div>',
)); ?>

<?php get_footer();

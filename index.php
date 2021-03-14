<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$title = get_bloginfo('name');
$image = '';
$description = '';

// STATIC BLOG PAGE
if (is_home() && get_option('page_for_posts')) {
    $id = get_option('page_for_posts');
    $image_id = get_post_thumbnail_id($id) ?? false;

    $title = get_the_title($id);
    $image = wp_get_attachment_image($image_id, 'original');
}

// ARCHIVE PAGES
if (is_archive()) {
    $title = get_the_archive_title();
    $description = get_the_archive_description();
}

$args = array(
    // 'prev_text' => '',
    // 'next_text' => '',
    'screen_reader_text' => '',
    'aria_label' => '',
    'class' => 'nav',
);

?>
<section class="lc  lc--padding">

    <?php if ($image) : ?>
        <?php echo $image; ?>
    <?php endif; ?>

    <h1 class="block__title">
        <?php echo $title; ?>
    </h1>

    <?php echo $description; ?>


    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content/content', 'overview'); ?>
        <?php endwhile; ?>

        <?php echo get_the_posts_navigation($args); ?>

    <?php else : ?>

        <?php get_template_part('template-parts/content/content', 'none'); ?>

    <?php endif; ?>

</section>

<?php get_footer();

<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$title = get_bloginfo('name');
$image = '';
$description = '';

// STATIC BLOG PAGE
if (is_home() && get_option('page_for_posts') ) {
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

?>

<?php if (have_posts()) : ?>
    <section>

        <div class="block  block--hero">
            <div class="block__media">
                <?php echo $image; ?>
            </div>

            <div class="block__content">
                <h1 class="block__title">
                    <?php echo $title; ?>
                </h1>
            </div>
        </div>

        <div class="grid  grid--2  grid-gap  padding">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content/content', 'overview'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>
    </section>

<?php else : ?>
    <?php get_template_part('template-parts/content/content', 'none'); ?>
<?php endif; ?>

<?php wp_link_pages(array(
    'before' => '<div>',
    'after' => '</div>',
)); ?>

<?php get_footer();

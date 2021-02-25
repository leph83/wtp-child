<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$title = get_the_title();
$image = get_the_post_thumbnail(get_the_id(), 'large') ?? false;
$date = get_the_time(get_option('date_format'));

// TAGS
$posttags = get_the_tags();
$tags = '';
if ($posttags) {
    $tags = __('tags', 'wtp-child') . ': ';
    foreach ($posttags as $tag) {
        $tags .= '<a href="' . get_term_link($tag->term_id) . '">' . $tag->name . '</a> ';
    }
}

// CATEGORIES
$postcategories = get_the_category();
$categories = '';
if ($postcategories) {
    $categories = __('categories', 'wtp-child') . ': ';
    foreach ($postcategories as $category) {
        $categories .= '<a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a> ';
    }
}

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

    <?php echo $image; ?>

    <h1>
        <?php echo $title; ?>
    </h1>

    <?php printf(__('By %s'), get_the_author_posts_link()); ?>
    <?php echo $date; ?>




    <div class="entry-content  clearfix">
        <?php the_content(); ?>
    </div>

    <?php comments_template('', true); ?>

</article>


<?php wp_link_pages(array(
    'before' => '<div class="">',
    'after' => '</div>',
)); ?>


<div class="">
    <div class="margin-right--auto">
        <?php previous_post_link(); ?>
    </div>

    <div class="margin-left--auto">
        <?php next_post_link(); ?>
    </div>
</div>


</div>
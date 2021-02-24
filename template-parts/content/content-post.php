<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$title = get_the_title();
$image = get_the_post_thumbnail(get_the_id(), 'large') ?? false;
$author = esc_html('by ') . get_the_author_posts_link();
$date = get_the_time(get_option('date_format'));

// TAGS
$posttags = get_the_tags();
$tags = '';
if ($posttags) {
    $tags = __('tags', 'test') . ': ';
    foreach ($posttags as $tag) {
        $tags .= '<a href="' . get_term_link($tag->term_id) . '">' . $tag->name . '</a> ';
    }
}

// CATEGORIES
$postcategories = get_the_category();
$categories = '';
if ($postcategories) {
    $categories = __('categories', 'test') . ': ';
    foreach ($postcategories as $category) {
        $categories .= '<a href="' . get_term_link($category->term_id) . '">' . $category->name . '</a> ';
    }
}

// POSTS
$postmeta = '';
if (get_post_type() == 'post') {
    $postmeta .=
        '<div class="">'
        . $author . ' | ' . $date .
        '</div>'
        .
        '<div class="">' . $tags . '</div>'
        .
        '<div class="">' . $categories . '</div>
    ';

    if (!empty(get_the_post_thumbnail_caption())) {
        $image = '<figure>' . $image . '<figcaption>' . get_the_post_thumbnail_caption() . '</figcaption></figure>';
    }
}

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

    <div class="lc  lc--3  lc--padding">
        <?php echo $image; ?>

        <h1>
            <?php echo $title; ?>
        </h1>

        <?php echo $postmeta; ?>
    </div>


    <div class="entry-content  clearfix">
        <?php if (is_singular()) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>
    </div>

    <?php comments_template('', true); ?>

</article>



<?php // pages and posts can have pagination - but not for archive etc. 
?>
<?php wp_link_pages(array(
    'before' => '<div class="lc  lc--3  lc--padding">',
    'after' => '</div>',
)); ?>


<div class="lc  lc--2  lc--padding  flex  flex-justify--space-between">
    <?php //show previous and next posts - but not for pages duh 
    ?>
    <div class="margin-right--auto">
        <?php previous_post_link(); ?>
    </div>

    <div class="margin-left--auto">
        <?php next_post_link(); ?>
    </div>
</div>


</div>
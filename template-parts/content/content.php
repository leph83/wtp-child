<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$title = get_the_title();
$image = get_the_post_thumbnail(get_the_id(), 'original') ?? false;

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

    <div class="lc  lc--padding">
        <?php echo $image; ?>

        <h1>
            <?php echo $title; ?>
        </h1>
    </div>


    <div class="entry-content  clearfix">
        <?php the_content(); ?>
    </div>

    <?php comments_template('', true); ?>

</article>

<?php wp_link_pages(array(
    'before' => '<div class="">',
    'after' => '</div>',
)); ?>
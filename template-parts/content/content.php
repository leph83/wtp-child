<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$title = get_the_title();
$image = get_the_post_thumbnail(get_the_id(), 'large') ?? false;

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

    <div class="lc  lc--3  lc--padding">
        <?php echo $image; ?>

        <h1>
            <?php echo $title; ?>
        </h1>
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



</div>
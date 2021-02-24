<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$title = get_the_title() ?? false;
$image = get_the_post_thumbnail() ?? false;
$description = wpautop(get_the_excerpt()) ?? false;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('block  block--hero'); ?>>

    <div class="block__media">
        <a href="<?php echo get_the_permalink(); ?>">
            <?php echo $image; ?>
        </a>
    </div>

    <div class="block__content">
        <h2>
            <a href="<?php echo get_the_permalink(); ?>">
                <?php echo $title; ?>
            </a>
        </h2>

        <div>
            <?php echo $description; ?>
        </div>
    </div>

</article>
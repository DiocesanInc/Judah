<?php

/**
 * Template part for displaying the featured content on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

?>

<?php if (get_field("featured_content_heading") !== "") : ?>
<h2 class="featured_content_heading">
    <?php the_field("featured_content_heading"); ?>
</h2>
<?php endif; ?>


<?php if (have_rows("featured_content_items")) : ?>
<div class="featured-content-container equal-height">

    <?php while (have_rows("featured_content_items")) : the_row(); ?>
    <?php $bgImg = get_sub_field("image")["url"]; ?>

    <a href="<?php echo get_sub_field("link")["url"]; ?>" class="teaser-box has-link"
        style="background: <?php the_field("featured_content_items_background_color"); ?>">
        <h2>
            <?php echo get_sub_field("link")["title"]; ?>
        </h2>
        <div class="teaser-image-wrapper">
            <img src=" <?php echo $bgImg; ?>" alt="<?php echo get_sub_field("link")["title"]; ?>" />
        </div>
    </a>
    <?php endwhile; ?>

</div>
<?php endif; ?>
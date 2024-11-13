<?php

/**
 * Block Name: Image Button
 * This is the template that displays the Image Button block.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package dpiChild
 */
?>

<?php
// create id attribute for specific styling
$id = 'image-buttons-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? ' align' . $block['align'] : '';

// values from ACF
if (get_field('is_manual')) {
    $bkgd   = get_field('bkgd')['url'] ?? '';
    $link   = get_field('link') ?? '';
    $target = $link['target'] ?? '';
    $title  = $link['title'] ?? '';
    $url    = $link['url'] ?? '';
} else {
    $page   = get_field('page');
    $bkgd   = get_the_post_thumbnail_url($page->ID);
    $target = '';
    $title  = get_the_title($page->ID);
    $url    = get_permalink($page->ID);
}

$bgClr = "#000000";
$opacity = 0.5;
if (!$bkgd) {
    $bgClr = get_field("primary_color", "options")["is_gradient"] ? "linear-gradient(90deg, var(--clr-primary), var(--clr-primary-2))" : "var(--clr-primary)";
    $opacity = 1;
}

?>

<a href="<?php echo $url; ?>" class="teaser-box has-link image-button-block<?php echo $align_class; ?>"
    target="<?php echo $target; ?>" title="<?php echo $title; ?>" id="<?php echo $id; ?>"
    style="background: <?php the_field("featured_content_items_background_color"); ?>">
    <div class="teaser-box-inner-wrapper">

        <h2>
            <?php echo $title; ?>
        </h2>
        <div class="teaser-image-wrapper">
            <img src=" <?php echo $bkgd; ?>" alt="<?php echo get_sub_field("link")["title"]; ?>" />
        </div>
    </div>
</a>

<style type="text/css">
#<?php echo "$id";

?> {
    height: 360px;
    min-width: 150px;
    margin-bottom: 1.75rem;
}

#<?php echo "$id .teaser-box-inner-wrapper";

?> {
    display: grid;
    grid-template-rows: 25% 75%;
    height: 100%;
}

#<?php echo "$id img";

?> {
    width: 100%;
    height: 100%;
}
</style>
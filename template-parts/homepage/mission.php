<?php

/**
 * Template part for displaying the mission on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$backgroundImage = get_field("mission_background_image")["url"];
$position = get_field("mission_content_position");
$header = get_field("mission_header");
$content = get_field("mission_content");
$content = get_field("mission_content");
$overlay_opacity = get_field("mission_image_overlay");
?>


<div class="mission-container">
    <div class="mission-content-wrapper">
        <?php if ($header) : ?>
        <h3 class="mission-header">
            <?php echo $header; ?>
        </h3>
        <?php endif; ?>
        <?php if ($content) : ?>
        <div class="mission-content">
            <?php echo $content; ?>
        </div>
        <?php endif; ?>
        <?php if (have_rows("mission_links")) : ?>
        <div class="mission-button-wrapper">
            <?php while (have_rows("mission_links")) : the_row(); ?>
            <a href="<?php echo get_sub_field("link")["url"]; ?>" class="the-button">
                <?php echo get_sub_field("link")["title"]; ?>
            </a>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="mission-image-wrapper <?php echo "overlay-$overlay_opacity"; ?>">
        <img class="mission-image" src="<?php echo $backgroundImage; ?>" alt="<?php echo $header; ?>">
    </div>
</div>

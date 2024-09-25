<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */


$staffImage = has_post_thumbnail() ? get_the_post_thumbnail_url() : getField("default_featured_image", "options", true, get_template_directory_uri() . "/assets/img/evoli_placeholder.png");

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="teaser-box staff-member blurred">
        <?php the_title("<h3>", "</h3>"); ?>
        <div class="teaser-image-wrapper">
            <img src="<?php echo $staffImage; ?>;" />
        </div>

        <div class="teaser-content">
            <h4 class="staff-member-position">
                <?php the_field("position"); ?>
            </h4>
        </div>

        <div class="links-container">
            <a href="<?php the_permalink(); ?>" class="the-button">
                Biography
            </a>

            <?php if (get_field("email")) : ?>
            <a href="mailto:<?php the_field("email"); ?>" class="the-button">
                <i class="fa fa-solid fa-envelope"></i>
            </a>
            <?php endif; ?>

        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
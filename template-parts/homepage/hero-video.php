<?php

/**
 * Partial for the hero section: Video.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

?>
<?php if (get_field("hero_video")) : ?>
    <div class="hero has-video">
        <?php while (have_rows("hero_video")) : the_row(); ?>

            <video class="hero-video" loop muted autoplay playsinline poster="<?php the_sub_field("poster_image"); ?>">
                <source src="<?php the_sub_field("mp4"); ?>" type="video/mp4">
                <source src="<?php the_sub_field("ogg"); ?>" type="video/ogg">
                <source src="<?php the_sub_field("webm"); ?>" type="video/webm">
            </video>

        <?php endwhile; ?>

    </div>
<?php endif;

<?php

/**
 * Partial for the hero section: Image(s).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

$full_width = get_field("hero_full_width") ? " full-width" : "";

if (have_rows("slider")) : ?>
<div class="hero<?php echo $full_width; ?>">
    <div class="slick-slider-navigation"></div>
    <div class="hero-slider">
        <?php while (have_rows("slider")) : the_row();
                $bgImg = get_sub_field("image");
            ?>

        <div class="hero-slide">
            <img class="slide-img" src="<?php echo $bgImg["url"]; ?>" />
            <?php if (get_field("hero_full_width")) :
                get_template_part("template-parts/homepage/hero", "overlay");
            endif;

            get_template_part("template-parts/homepage/hero", "info");
            ?>
        </div>

        <?php endwhile; ?>
    </div>
</div>
<?php endif;

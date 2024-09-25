<?php

/**
 * Template part for displaying the stats on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */


$bannerType = "mass-times";
?>

<div class="banner-container <?php echo "$bannerType-container"; ?> parent-theme">

    <img class="banner-img" src="<?php echo get_field("stats_background_image")["url"]; ?>">

    <div class="banner-content-wrapper equal-height <?php echo $bannerType; ?>">

        <?php get_template_part("template-parts/homepage/banner",$bannerType); ?>
    </div>
</div>

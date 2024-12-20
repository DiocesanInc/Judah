<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

?>

<div class="footer-wrapper limit-width">
    <?php get_template_part("template-parts/footers/footer", "social-media"); ?>
    <div class="contact-us">
        <?php get_template_part("template-parts/footers/footer", "address"); ?>
        <?php get_template_part("template-parts/footers/footer", "contact"); ?>
    </div>
    <?php get_template_part("template-parts/footers/footer", "quicklinks-top"); ?>
</div>
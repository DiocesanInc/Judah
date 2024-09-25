<?php

/**
 * Partial for the hero section: Info
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

?>

<?php if (get_sub_field("title") || get_sub_field("link")) : ?>
    <div class="hero-info">
        <?php if (get_sub_field("title")) : ?>
            <h1 class="hero-title">
                <?php the_sub_field("title") ?>
            </h1>
        <?php endif; ?>

        <?php if (get_sub_field("content")) : ?>
            <div class="hero-content">
                <?php the_sub_field("content") ?>
            </div>
        <?php endif; ?>



        <?php if (get_sub_field("link")) : ?>
            <div class="hero-buttons">
                <?php
                echo acfLink(get_sub_field("link"), "the-button", null);
                ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif;

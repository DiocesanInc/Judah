<?php

/**
 * The template for displaying quicklinks at the top of the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

?>

<div class="quicklinks-top-container">
    <h6>Quick Links</h6>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-quicklinks-top',
            'menu_id'        => 'footer-quicklinks-top',
        )
    );
    ?>
</div>
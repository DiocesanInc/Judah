<?php

/**
 * Partial for the navbar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */
?>

<nav id="site-navigation" class="main-navigation">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        )
    );
    ?>
</nav><!-- #site-navigation -->
<form role="search" class="search-form" method="GET" action=<?php echo home_url(); ?>>
    <div class="close-search">

    </div>
    <div class="search-inner-container">
        <div class="search-header">
            Search Our Website
        </div>
        <div class="search-wrapper">
            <label for="s">
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Search..." name="s" title="Search for:" />
            </label>
            <button type="submit" class="search-submit" value="Search...">
                <i class='header-search fa fa-search'></i>
            </button>
        </div>
    </div>
</form>
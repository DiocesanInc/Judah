<?php

/**
 * Template part for displaying the mission on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */


?>

<?php if (have_rows("hero_buttons")) : ?>
    <div class="hero-buttons-container limit-width">
        <?php while (have_rows("hero_buttons")) : the_row();
            $content = get_sub_field("icon") . "<span>" . get_sub_field("link")["title"] . "</span>";
        ?>
            <h2>
                <?php echo acfLink(get_sub_field('link'), "hero-button blurred blurred-hover", $content); ?>
            </h2>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
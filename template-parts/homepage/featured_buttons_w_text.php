<?php

/**
 * Template part for displaying the featured text + Links on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

?>

<?php if (have_rows("featured_buttons_w_text_links")) : ?>
    <div class="featured-buttons-w-text-container limit-width">
        <div class="featured-buttons-w-text-wrapper">
            <h1 class="featured-buttons-w-text-heading"><?php the_field("featured_buttons_w_text_title"); ?></h1>
            <p class="featured-buttons-w-text-text"><?php the_field("featured_buttons_w_text_text"); ?></p>
        </div>
        <div class="featured-buttons-w-text-buttons">
            <?php while (have_rows('featured_buttons_w_text_links')) : the_row(); 
                $link = get_sub_field('link');
                if( $link ) {
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button blurred-on-hover" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <?php } ?>
                <!---<a href="<?php #echo get_sub_field('link')["url"]; ?>" class="button blurred-on-hover">--->
                    <?php echo get_sub_field("icon") ?>
                    <div class="button-text">
                        <h4 class="button-title has-tertiary-color"><?php echo $link_title; ?></h4>
                        <?php echo get_sub_field('text'); ?>
                    </div>
                <?php
				  if( $link ) {?>
					</a>
				  <?php } ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

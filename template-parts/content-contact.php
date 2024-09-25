<?php

/**
 * Template part for displaying the content in page-contact.php.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evoli
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <div class="limit-width">
        <div class="the-content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; ?>

<?php if (get_field("google_maps_iframe", "options")) : ?>
    <div class="limit-width">
        <iframe src="<?php echo get_field('google_maps_iframe', 'options'); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
<?php endif; ?>
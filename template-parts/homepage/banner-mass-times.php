<?php

/**
 * Template part for displaying the stats on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

?>

<?php if (have_rows("mass_times_days", "options")) : ?>
    <?php while (have_rows("mass_times_days", "options")) : the_row() ?>
    <div class="banner-content">
      <div class="banner-content-flex">
        <?php if (get_sub_field("mass_times_type")) : ?>
        <h1 class="banner-heading"><?php the_sub_field("mass_times_type"); ?>
        </h1>
        <?php endif; ?>
        <div class="mass-times-items banner-items">
            <div class="mass-times-item banner-item">
                <!-- <div class="mass-times-day banner-item-heading">
                    <?php the_sub_field("mass_times_type"); ?>
                </div> -->
                <?php
                // $i=1;
                // $total = count(get_sub_field("mass_times_times","options"));
                while (have_rows("mass_times_times", "options")) : the_row() ?>
                <div class="banner-item-content">
                    <?php if(get_sub_field("mass_times_label")) : ?>
                    <div class="mass-times-day banner-item-heading mass-times-item-label">
                        <?php the_sub_field("mass_times_label"); ?><?php echo "&nbsp;-"?>
                    </div>
                    <?php endif; ?>
                    <div class="mass-times-item-time">
                        <?php the_sub_field("mass_times_time"); ?>
                    </div>
                </div>
                <?php
                // $i++;
                endwhile; ?>
            </div>
        </div>
        <div class="mass-times-link">
            <a href="<?php echo get_field("mass_times_link")["url"]; ?>" class="the-button" title="Full Schedule">
                <?php echo get_field("mass_times_link")["title"]; ?>
            </a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>

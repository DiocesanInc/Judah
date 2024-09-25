<?php

/**
 * Template Name: Mass Times
 *
 * The template for displaying the mass times Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evoli
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main" id="main">
        <?php get_template_part('template-parts/headers/page-header'); ?>

      <div class="tabs-container limit-width">
        <?php if (have_rows("mass_times_days", "options")) : ?>
          <?php $countTabs = 0; $countContent = 0;?>
          <div class="tabs-bar">
            <h1 class="mass-times-title"><?php the_field("mass_times_title", "options");?></h1>
            <div class="tabs-tabs">
              <?php while (have_rows("mass_times_days", "options")) : the_row(); ?>
                <h2 type="button" class="nav-tab has-primary-border-color-hover font-main" data-controls="tab-<?= $countTabs; ?>" id="nav-<?= $countTabs; ?>"><?php the_sub_field("mass_times_type"); ?></h2>
                <?php $countTabs++;?>
              <?php endwhile; ?>
            </div>
          </div>
          <div class="mass-times-container tabs-content closed">
              <?php while (have_rows("mass_times_days", "options")) : the_row(); ?>
              <div class="tab-content" id="tab-<?= $countContent; ?>">
                <h2 class="mass-times-type"><?php the_sub_field("mass_times_type"); ?></h2>
                <h2 type="button" class="back-button">Back</h2>
                <div class="mass-times-section grid-container">
                  <?php while (have_rows("mass_times_times", "options")) : the_row(); ?>
                  <div class="mass-time teaser-box">
                      <h3 class="mass-time-day">
                          <?php the_sub_field("mass_times_label"); ?>
                      </h3>
                      <p class="mass-time-time">
                          <?php the_sub_field("mass_times_time"); ?>
                      </p>
                  </div>
                  <?php endwhile; ?>
                  <?php $countContent++;?>
                </div>
              </div>
              <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </main>
</div>

<?php get_footer();

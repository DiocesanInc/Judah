<?php

/**
 * Template part for displaying the ministry archive as a funnel
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evoli
 */


$groups = get_terms(
    array(
        'taxonomy'   => "ministry-group",
        'hide_empty' => false,
        "orderby" => "date",
        "order" => "DESC"
    )
);
?>

<div class="ministry-funnel">
    <?php foreach ($groups as $group) : ?>
    <?php $thumbnail = get_field("ministry_group_image", $group) ? get_field("ministry_group_image", $group)["url"] : get_field("default_featured_image", "options"); ?>
    <a href="<?php echo get_term_link($group) ?>" class="teaser-box has-link">
        <h2>
            <?php echo $group->name; ?>
        </h2>
        <div class="teaser-image-wrapper">
            <img src="<?php echo $thumbnail; ?>" alt="<?php echo $group->name; ?>" />
        </div>
    </a>
    <?php endforeach; ?>
</div>
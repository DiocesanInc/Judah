<?php

/**
 * Template part for displaying the news on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$news = get_field("news_category");

?>

<?php if ($news) : ?>
<h2 class="news-heading"><?php the_field("news_heading"); ?></h2>
<div class="news-container slick-slider equal-height">
    <?php
        $posts = get_posts(array(
            "category" => $news
        ));

        foreach ($posts as $post) :
            $bgImg = has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, "full") : getDefaultFeaturedImage(true);

        ?>
    <div class="news-slide">
        <div class="post-wrapper blurry">
            <img src="<?php echo $bgImg; ?>" alt="<?php echo $post->post_title; ?>" />
            <div class="post-content-wrapper">
                <h1 class="post-heading">
                    <?php echo $post->post_title; ?>
                </h1>

                <div class="post-excerpt">
                    <?php echo $post->post_excerpt !== "" ? $post->post_excerpt : wp_trim_words($post->post_content, 25); ?>
                </div>

                <a href="<?php the_permalink($post->ID); ?>" class="the-button" title="Read more">
                    Read More
                </a>

            </div>

        </div>
    </div>
    <?php endforeach;
        wp_reset_postdata();
        ?>
</div>
<?php endif; ?>
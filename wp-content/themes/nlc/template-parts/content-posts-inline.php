<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nlc
 */

?>

<a href="<?php echo the_permalink(get_the_ID())?>" class="news-grid__item news-item">
    <div class="news-item__image-wrap">
        <img class="news-item__image" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
    </div>
    <div class="news-item__desc news-item-desc">
        <div class="news-item-desc__preview"><?php the_title(); ?></div>
        <div class="news-item-desc__date"><?php the_date(); ?></div>
    </div>
</a>
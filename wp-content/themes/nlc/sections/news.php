<?php

$args = array(
    'category' => 6,
    'numberposts' => 4,
);
$news_arr = get_posts($args);
$news_id = $news_arr['ID'];
?>

<div class="section section_grey">
    <div class="container">
        <div class="section__title section__title_mb30px">
            <div class="st-title fz50">Новости</div>
        </div>
        <div class="section_news-wrap">
            <div class="news-grid">
                <?php foreach ($news_arr as $news) : ?>
                    <a href="<?=get_post_permalink($news->ID); ?>" class="news-grid__item news-item">
                        <div class="news-item__image-wrap">
                            <img class="news-item__image" src="<?=get_the_post_thumbnail_url($news->ID); ?>">
                        </div>
                        <div class="news-item__desc news-item-desc">
                            <div class="news-item-desc__preview"><?=mb_substr($news->post_content, 0, 110)."...";?></div>
                            <div class="news-item-desc__date"><?=get_the_date('d.m.Y', $news->ID); ?></div>
                        </div>
                    </a>
                <?php endforeach;?>
            </div>
        </div>
        <p class="tac">
            <a href="/category/news/" class="button">Все новости</a>
        </p>
    </div>
</div>
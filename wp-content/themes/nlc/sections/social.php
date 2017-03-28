<?php

    $instagram_arr = $section['instagram'];
    $facebook = $section['facebook'];

?>

<div class="section">
    <div class="container">
        <div class="social">
            <div class="social__instagram">
                <div class="section__title">
                    <div class="st-title fz50 tab-fz35 mob-fz25">Мы в instagram</div>
                </div>
                <div class="instagram-grid">
                    <?php foreach ($instagram_arr as $instagram_post) : ?>
                        <a href="#" class="instagram-grid__item instagram-item">
                            <div class="instagram-item__image-wrap">
                                <img class="instagram-item__image" src="<?=$instagram_post['image']; ?>" alt="">
                            </div>
                            <div class="instagram-item__title tab-fz18"><?=$instagram_post['title']; ?></div>
                            <div class="instagram-item__category tab-fz14">Рубрика: <?=$instagram_post['rubric']; ?></div>
                            <div class="instagram-item__preview tab-fz14"><?=$instagram_post['descr']; ?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="social__facebook facebook">
                <div class="section__title">
                    <div class="st-title fz50 tab-fz35 mob-fz25">Мы в facebook</div>
                </div>
                <div class="facebook__item">
                    <img class="facebook__image" src="<?=$facebook; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

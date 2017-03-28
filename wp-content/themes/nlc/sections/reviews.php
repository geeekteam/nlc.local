<?php
    $title = $section['title'];
    $reviews = $section['reviews'];
?>

<div class="section section_grey">
    <div class="container">
        <div class="section__title section__title_mb40px">
            <div class="st-title fz50"><?= $title; ?></div>
        </div>
        <div class="review-slider owl-carousel">
            <?php foreach ($reviews as $review): ?>
            <div class="review-slider__content">
                <div class="review-slider__photo">
                    <img class="review-slider__img" src="<?= $review['photo']; ?>">
                </div>
                <div class="review-slider__text">
                    <div class="review-slider__header">
                        <div class="review-slider__name"><?= $review['name']; ?></div>
                        <div class="review-slider__right">
                            <span class="review-slider__place">Клиника: <?= $review['place']; ?></span>
                            <span class="review-slider__date"><?= $review['date']; ?></span>
                        </div>
                    </div>
                    <div class="review-slider__text"><?= $review['text']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
/**
template name: Отзывы
 */

get_header();

$title = get_field('title');
$reviews = get_field('reviews');
$feedback_title = get_field('feedback_title');
$feedback_subtitle = get_field('feedback_subtitle');
$feedback_text_button = get_field('feedback_text_button');
?>

<div class="section">
    <div class="container">
        <div class="section__title st-title fz50"><?=$title;?></div>
        <?php if ($reviews): ?>
            <?php foreach ($reviews as $review): ?>
                <div class="review-slider__content review-slider_mb30">
                    <div class="review-slider__photo">
                        <img class="review-slider__img" src="<?=$review['image']; ?>">
                    </div>
                    <div class="review-slider__text">
                        <div class="review-slider__header">
                            <div class="review-slider__name"><?=$review['name']; ?></div>
                            <div class="review-slider__right">
                                <span class="review-slider__place">Клиника: <?=$review['place']; ?></span>
                                <span class="review-slider__date"><?=$review['date']; ?></span>
                            </div>
                        </div>
                        <div class="review-slider__text"><?=$review['text']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<div class="section-form">
    <div class="section-form__container container">
        <div class="section-form__header">
            <div class="section-form__title"><?=$feedback_title;?></div>
            <div class="section-form__descr"><?=$feedback_subtitle;?></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="438" title="Contact form 2" html_class="form-request"]'); ?>
    </div>
</div>

<?php

get_footer();

?>
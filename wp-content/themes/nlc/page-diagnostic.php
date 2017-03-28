<?php
/**
template name: Диагностика
 */

get_header();

$banner = get_field('banner');
$banner_title = get_field('banner_title');
$banner_text = get_field('banner_text');
$banner_button_text = get_field('banner_button_text');
$banner_footer = get_field('banner_footer');
$before_accordion_title = get_field('before_accordion_title');
$accordion = get_field('accordion');
$feedback_title = get_field('feedback_title');
$feedback_subtitle = get_field('feedback_subtitle');
$feedback_button_text = get_field('feedback_button_text');


?>

<div class="section-presentation" style="background-image: url(<?=$banner;?>);">
    <div class="section">
        <div class="section-presentation__container container tac">
            <h1 class="section-presentation__title st-title fz55"><?=$banner_title; ?></h1>
            <div class="section-presentation__descr"><?=$banner_text; ?></div>
            <p>
                <a href="#" class="button tab-fz18"><?=$banner_button_text; ?></a>
            </p>
        </div>
    </div>
    <div class="section-presentation__footer">
        <div class="section-presentation__container container">
            <div class="grid grid_presentation">
                <?php foreach ($banner_footer as $footer_element): ?>
                <div class="grid__item presentation-item">
                    <div class="presentation-item__number"><?=$footer_element['number'];?></div>
                    <div class="presentation-item__descr"><?=$footer_element['text'];?></div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="section__title st-title fz50"><?=$before_accordion_title;?></div>
        <div class="js-accordion st-accordion">
            <?php foreach ($accordion as $accordion_item):?>
            <div class="js-accordion-item st-accordion__item">
                <div class="js-accordion-toggle st-accordion__header"><?=$accordion_item['accordion_title'] ?></div>
                <div class="js-accordion-content st-accordion__content">
                    <div class="st-accordion__content_wrap">
                        <?php foreach ($accordion_item as $common_contents):?>
                            <?php if (is_array($common_contents)):?>
                                <?php foreach($common_contents as $common_content):?>
                                    <div class="grid__item">
                                        <?=$common_content['common_content']?>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif;?>
                        <?php endforeach; ?>
                        <?=$accordion_item['common_content']; ?>
                        <div class="grid grid_diagnostic">
                            <?php foreach ($accordion_item as $columns):?>
                                <?php if (is_array($columns)):?>
                                    <?php foreach($columns as $column):?>
                                        <div class="grid__item">
                                            <?=$column['content_column']?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <p class="tac">
                        <a href="#" class="button">Отправить бесплатный запрос</a>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
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
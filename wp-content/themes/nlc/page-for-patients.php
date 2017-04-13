<?php
/**
template name: Для пациентов
 */

get_header();

$accordion = get_field('accordion');
$feedback_title = get_field('feedback_title');
$feedback_subtitle = get_field('feedback_subtitle');
$feedback_button_text = get_field('feedback_button_text');
$companies_slider = get_field('companies_slider')

?>
<?php if ($accordion):?>
    <div class="section">
        <div class="container">
            <div class="company-slider owl-carousel">
                <?php foreach ($companies_slider as $slide): ?>
                    <a class="company-slider__slide" target="_blank" href="<?= $slide['company_link']?>">
                        <img class="company-slider__slide-image" src="<?=$slide['image']?>" alt="">
                        <div class="company-slider__content">
                            <h1 class="company-slider__title"><?=$slide['company_name']?></h1>
                        </div>
                    </a>
                <?php endforeach;?>
            </div>
            <div class="js-accordion st-accordion">
                <?php foreach ($accordion as $accordion_item):?>
                    <div class="js-accordion-item st-accordion__item">
                        <div class="js-accordion-toggle st-accordion__header"><?=$accordion_item['title'] ?></div>
                        <div class="js-accordion-content st-accordion__content ova">
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
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif?>
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
<?php
/**
template name: Почему выбирают нас
 */

get_header();

$banner = get_field('banner');
$banner_title = get_field('banner_title');
$left_text = get_field('left_text');
$right_text = get_field('right_text');
$link_text = get_field('link_text');
$link = get_field('link');
$first_content_title = get_field('first_content_title');
$first_content_subtitle = get_field('first_content_subtitle');
$first_content = get_field('first_content');
$second_content_title = get_field('second_content_title');
$second_content_subtitle = get_field('second_content_subtitle');
$second_content = get_field('second_content');
$phones = get_field('phones');
$emails = get_field('emails');
$mission = get_field('mission');
$feedback_title = get_field('feedback_title');
$feedback_subtitle = get_field('feedback_subtitle');
$feedback_button_text = get_field('feedback_button_text');

?>

    <div class="section section_bg-choose-us" style="background-image: url(<?= $banner;?>)">
        <div class="container">
            <div class="section__title section__title_white">
                <div class="st-title fz55"><?=$banner_title;?></div>
            </div>
            <div class="grid grid_elems-2">
                <div class="grid__item"<?=$left_text;?></div>
                <div class="grid__item"><?=$right_text?><a class="grid__item_read-more" href="<?=$link;?>"><?=$link_text;?></a></div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section__item section-item">
                <div class="section__title st-title fz50"><?=$first_content_title;?></div>
                <div class="section-item__subtitle st-title fz35"><?=$first_content_subtitle;?></div>
                <div class="st-content">
                    <?=$first_content;?>
                </div>
            </div>
            <div class="section__item section-item">
                <div class="section__title st-title fz50"><?=$second_content_title;?></div>
                <div class="section-item__subtitle st-title fz35"><?=$second_content_subtitle;?></div>
                <div class="section-item-grid">
                    <div class="section-item-grid__content">
                        <?=$second_content;?>
                    </div>
                    <?php if ($phones || $emails):?>
                        <div class="section-item-grid__contacts">
                            <div class="section-contacts section__contacts">
                                <div class="section-contacts__header">Наши контакты:</div>
                                <div class="section-contacts__body">
                                    <?php if (is_array($phones)):?>
                                        <?php foreach ($phones as $phone):?>
                                            <div class="section-contacts__line">
                                                <a class="section-contacts__link" href="tel:<?=$phone['phone'];?>"><?=$phone['phone'];?></a>
                                                <p class="section-contacts__text"><?=$phone['name'];?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif?>
                                    <?php if (is_array($emails)): ?>
                                        <div class="section-contacts__line">
                                            <p class="section-contacts__text">E-mail:</p>
                                            <?php foreach ($emails as $email):?>
                                                <a class="section-contacts__link section-contacts__link_fz25" href="mailto:<?=$email['email'];?>"><?=$email['email'];?></a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section section_grey">
        <div class="container">
            <div class="mission">
                <div class="mission__content">
                    <?=$mission;?>
                </div>
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
<?php
/**
template name: Лечение
 */

get_header();

$accordion_title = get_field('accordion_title');
$accordion_elements = get_field('accordion_elements');
$feedback_title = get_field('feedback_title');
$feedback_subtitle = get_field('feedback_subtitle');
$feedback_button_text = get_field('feedback_button_text');

?>

<div class="section">
    <div class="container section_news">
        <div class="section__title st-title fz50"><?php echo the_title(); ?></div>
        <div class="st-content">
            <img class="float-right" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/pages/content', 'treatment');
            endwhile;
            ?>
        </div>
    </div>
    <p class="tac">
        <a href="#" class="button">Вернуться к списку статей</a>
    </p>
</div>

<div class="section section_grey">
    <div class="container">
        <div class="section__title st-title fz50"><?=$accordion_title; ?></div>
        <div class="js-accordion st-accordion">
            <?php foreach ($accordion_elements as $accordion_element): ?>
            <div class="js-accordion-item st-accordion__item">
                <div class="js-accordion-toggle st-accordion__header"><?=$accordion_element['title']; ?></div>
                <div class="js-accordion-content st-accordion__content st-content">
                    <img class="float-right" src="<?=$accordion_element['image']; ?>" alt="">
                    <?=$accordion_element['descr']; ?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<div class="section-form">
    <div class="section-form__container container">
        <div class="section-form__header">
            <div class="section-form__title"><?=$feedback_title; ?></div>
            <div class="section-form__descr"><?=$feedback_subtitle?></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="438" title="Contact form 2" html_class="form-request"]'); ?>
    </div>
</div>


<?php

get_footer();

?>
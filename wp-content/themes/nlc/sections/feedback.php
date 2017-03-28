<?php
    $header_title = $section['header_title'];
    $header_subtitle = $section['header_subtitle'];
    $button_text = $section['button_text'];
?>

<div class="section-form">
    <div class="section-form__container container">
        <div class="section-form__header">
            <div class="section-form__title"><?=$header_title;?></div>
            <div class="section-form__descr "><?=$header_subtitle;?></div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="438" title="Contact form 2" html_class="form-request"]'); ?>
    </div>
</div>
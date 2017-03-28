<?php

$faqs = $section['question'];

?>

<div class="section section_grey">
    <div class="container">
        <div class="section__title">
            <div class="st-title fz50">Часто задаваемые вопросы</div>
        </div>
        <div class="faq-grid">
            <?php foreach ($faqs as $faq) :?>
            <div class="faq-grid__item faq-item">
                <div class="faq-item__title"><?=$faq['question_text']; ?></div>
                    <div class="faq-item__text"><?=$faq['answer_text']; ?></div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

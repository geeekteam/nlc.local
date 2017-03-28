<?php
    $title = $section['title'];
    $header_title = $section['header_title'];
    $header_subtitle = $section['header_subtitle'];
    $elements = $section['elements'];
?>
<div class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__title">
                <div class="st-title fz50"><?= $header_title; ?></div>
            </div>
            <div class="section__text "><?= $header_subtitle; ?></div>
        </div>
    </div>
    <div class="container">
        <div class="section__subtitle"><?= $title; ?></div>
        <div class="section-grid">
            <?php foreach ($elements as $element): ?>
            <div class="section-grid__item">
                <div class="section-grid__icon-wrapper">
                    <div class="section-grid__icon">
                        <img src="<?= $element['icon']; ?>" alt="">
                    </div>
                </div>
                <div class="section-grid__text"><?= $element['descr']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

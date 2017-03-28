<?php
    $title = $section['title'];
    $elements = $section['elements'];
?>

<div class="section">
    <div class="container">
        <div class="why-korea">
            <div class="why-korea__content">
                <div class="why-korea__title">
                    <div class="st-title fz50"><?= $title; ?></div>
                </div>
                <div class="list-advantage">
                    <?php foreach ($elements as $element) : ?>
                    <div class="list-advantage__item">
                        <div class="list-advantage__icon" style="background-image: url('<?= $element['icon']; ?>'); background-repeat:no-repeat; background-position: center;"></div>
                        <div class="list-advantage__text"><?= $element['descr']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
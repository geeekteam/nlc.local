<?php
    $title = $section['title'];
    $slides = $section['slides'];
?>

<div class="section">
    <div class="container">
        <div class="section__title section__title_mb30px">
            <div class="st-title fz50"><?= $title; ?></div>
        </div>
        <div class="say-about owl-carousel">
            <?php foreach ($slides as $slide): ?>
                <?= $slide['element']; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php
    $slides = $section['slides'];
?>

<div class="main-slider owl-carousel">
    <?php foreach ($slides as $slide):  ?>
        <div class="main-slider__slide" style="background-image: url(<?=$slide['image'];?>);">
            <div class="container">
                <div class="main-slider__content">
                    <div class="main-slider__title"><?=$slide['title'];?></div>
                    <div class="main-slider__subtitle"><?=$slide['subtitle'];?></div>
                    <div class="main-slider__text"><?=$slide['descr'];?></div>
                    <div class="main-slider__button">
                        <a href="#" class="button"><?=$slide['button_text'];?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
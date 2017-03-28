<?php
/**
    template name: main-page
*/

    get_header();
    


?>


 <!-- Block content -->
        
    <div class="main-slider owl-carousel">
        <?php
        if ( have_rows('main_slider') ) {
            while ( have_rows('main_slider') ) : the_row();
                if ( get_row_layout() == 'slide' ) {
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $subtitle = get_sub_field('subtitle');
                    $description = get_sub_field('description');
                    $button_text = get_sub_field('button_text');
                    echo
                    '<div class="main-slider__slide" style="background-image: url(' . $image . ');">
                        <div class="container">
                            <div class="main-slider__content">
                                <h1 class="main-slider__title">'
                                    . $title .
                                '</h1>
                                <div class="main-slider__subtitle">'
                                    . $subtitle .
                                '</div>
                                <div class="main-slider__text">'
                                    . $description .
                                '</div>
                                <div class="main-slider__button">
                                    <a href="#" class="button">'
                                        . $button_text .
                                    '</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            endwhile;
        };
        ?>
    </div>

    <div class="section">
        <div class="container">
            <?php if ( have_rows('how_we_work_header') ) {
                while ( have_rows('how_we_work_header') ) : the_row();
                    if (get_row_layout() == 'header') {
                        $title = get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        echo 
                        '<div class="section__header">
                            <div class="section__title">
                                <div class="st-title fz50">'
                                    . $title .
                                '</div>
                            </div>
                            <div class="section__text ">'
                                . $subtitle .
                            '</div>
                        </div>';
                    }
                endwhile;
            } ?>
        </div>
        <div class="container">
            <div class="section__subtitle">
                <?php
                    if(get_field('how_we_work_title')) {
                        echo get_field('how_we_work_title');
                    }
                ?>
            </div>
            <div class="section-grid">
                <?php if( have_rows('how_we_work_elements') ) {
                    while ( have_rows('how_we_work_elements') ) : the_row();
                        if( get_row_layout() == 'elems' ) {
                            $icon = get_sub_field('icons');
                            $text = get_sub_field('text');
                            echo
                            '<div class="section-grid__item">
                                <div class="section-grid__icon-wrapper">
                                    <div class="section-grid__icon">
                                        <img src="' . $icon . '"/>
                                    </div>
                                </div>
                                <div class="section-grid__text">'
                                    . $text .
                                '</div>
                            </div>';
                        }
                    endwhile;
                } ?>
            </div>
        </div>
    </div>

    <div class="section-form">
        <div class="section-form__container container">
            <div class="section-form__header">
                <div class="section-form__title">Запросите стоимость <br>Вашего лечения/диагностики</div>
                <div class="section-form__descr ">Мы проконсультируем Вас и поможем найти оптимальный вариант лечения</div>
            </div>
            <form class="form-request">
                <div class="form-request__line">
                    <textarea class="st-textarea " placeholder="Ваш запрос, информация о заболевании (диагноз), любая формулировка"></textarea>
                </div>
                <div class="form-request__line">
                    <div class="form-request__inputs">
                        <input class="form-request__input st-input " type="text" placeholder="ФИО">
                        <input class="form-request__input st-input " type="text" placeholder="Контактный телефон или email">
                    </div>
                </div>
                <div class="form-request__line">
                    <label class="st-label">
                        <div class="st-label__checkbox st-checkbox">
                            <input class="st-checkbox__input" type="checkbox">
                            <div class="st-checkbox__checkbox"></div>
                        </div>
                        <span class="st-label__text ">Отправляя запрос, я соглашаюсь на обработку своих персональных данных</span>
                    </label>
                </div>
                <p class="tac">
                    <a href="#" class="button ">Отправить бесплатный запрос</a>
                </p>
            </form>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="why-korea">
                <div class="why-korea__content">
                    <div class="why-korea__title">
                        <div class="st-title fz50  ">Почему Южная Корея?</div>
                    </div>
                    <div class="list-advantage">
                        <div class="list-advantage__item">
                            <div class="list-advantage__icon">
                                <i class="fri fri_icon-equipment"></i>
                            </div>
                            <div class="list-advantage__text">Новейшее оборудование</div>
                        </div>
                        <div class="list-advantage__item">
                            <div class="list-advantage__icon">
                                <i class="fri fri_icon-high-lvl"></i>
                            </div>
                            <div class="list-advantage__text">Высокий уровень медицинских технологий</div>
                        </div>
                        <div class="list-advantage__item">
                            <div class="list-advantage__icon">
                                <i class="fri fri_icon-high-skill"></i>
                            </div>
                            <div class="list-advantage__text">Высокая квалификация медицинского персонала</div>
                        </div>
                        <div class="list-advantage__item">
                            <div class="list-advantage__icon">
                                <i class="fri fri_icon-reliability"></i>
                            </div>
                            <div class="list-advantage__text">Надежные передовые услуги здравоохранения</div>
                        </div>
                        <div class="list-advantage__item">
                            <div class="list-advantage__icon">
                                <i class="fri fri_icon-price"></i>
                            </div>
                            <div class="list-advantage__text">Доступная стоимость лечения</div>
                        </div>
                        <div class="list-advantage__item">
                            <div class="list-advantage__icon">
                                <i class="fri fri_icon-korean-medics"></i>
                            </div>
                            <div class="list-advantage__text">Корейские медики достигли самого высокого уровня в диагностировании и лечении онкологических, кардиологических заболеваний, нарушений опорно-двигательного аппарата и др. заболеваний</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_grey">
        <div class="container">
            <div class="section__title section__title_mb40px mob-fz30">
                <div class="st-title fz50  ">Отзывы клиентов</div>
            </div>
            <div class="review-slider owl-carousel">
    <div class="review-slider__content">
        <div class="review-slider__photo">
            <img class="review-slider__img" src="<?php echo get_template_directory_uri();?>/images/review-photo.jpg">
        </div>
        <div class="review-slider__text">
            <div class="review-slider__header">
                <div class="review-slider__name">Марина Пшеничникова</div>
                <div class="review-slider__right">
                    <span class="review-slider__place">Клиника: Квимс</span>
                    <span class="review-slider__date">29.09.2016</span>
                </div>
            </div>
            <div class="review-slider__text tab-fz14">Мы решили ехать в Южную Корею, когда у нас возникли некоторые разногласия с российской медициной по поводу состояния здоровья нашего ребенка. Мы приехали сюда, Никите провели обследование: сделали УЗИ, взяли кровь, по результатам у нас был прием. Профессор – заведующий инфекционным отделением успокоил нас, сказал, что сын абсолютно здоров.</div>
        </div>
    </div>
    <div class="review-slider__content">
        <div class="review-slider__photo">
            <img class="review-slider__img" src="<?php echo get_template_directory_uri();?>/images/review-photo.jpg">
        </div>
        <div class="review-slider__text">
            <div class="review-slider__header">
                <div class="review-slider__name">Марина Пшеничникова</div>
                <div class="review-slider__right">
                    <span class="review-slider__place">Клиника: Квимс</span>
                    <span class="review-slider__date">29.09.2016</span>
                </div>
            </div>
            <div class="review-slider__text tab-fz14">Мы решили ехать в Южную Корею, когда у нас возникли некоторые разногласия с российской медициной по поводу состояния здоровья нашего ребенка. Мы приехали сюда, Никите провели обследование: сделали УЗИ, взяли кровь, по результатам у нас был прием. Профессор – заведующий инфекционным отделением успокоил нас, сказал, что сын абсолютно здоров.</div>
        </div>
    </div>
</div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="section__title section__title_mb30px">
                <div class="st-title fz50  ">Что о нас говорят</div>
            </div>
            <div class="say-about owl-carousel">
                <div class="say-about-grid">
                    <div class="say-about-grid__item">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                    <div class="say-about-grid__item tab-display-none">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                    <div class="say-about-grid__item tab-display-none">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                    <div class="say-about-grid__item tab-display-none">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                </div>
                <div class="say-about-grid">
                    <div class="say-about-grid__item">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                    <div class="say-about-grid__item tab-display-none">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                    <div class="say-about-grid__item tab-display-none">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                    <div class="say-about-grid__item tab-display-none">
                        <img class="say-about-grid__image" src="<?php echo get_template_directory_uri();?>/images/say-about-video.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section_grey">
        <div class="container">
            <div class="section__title section__title_mb30px">
                <div class="st-title fz50  ">Новости</div>
            </div>
            <div class="news-grid">
                <a href="#" class="news-grid__item news-item">
                    <div class="news-item__image-wrap">
                        <img class="news-item__image" src="<?php echo get_template_directory_uri();?>/images/news1.jpg">
                    </div>
                    <div class="news-item__desc news-item-desc">
                        <div class="news-item-desc__preview">Испанские ученые выяснили, что пальмовое масло провоцирует РАК. Оно используется в 90% кондитерских продуктов.</div>
                        <div class="news-item-desc__date">30.12.2016</div>
                    </div>
                </a>
                <a href="#" class="news-grid__item news-item">
                    <div class="news-item__image-wrap">
                        <img class="news-item__image" src="<?php echo get_template_directory_uri();?>/images/news2.jpg">
                    </div>
                    <div class="news-item__desc news-item-desc">
                        <div class="news-item-desc__preview">Испанские ученые выяснили, что пальмовое масло провоцирует РАК. Оно используется в 90% кондитерских продуктов.</div>
                        <div class="news-item-desc__date">30.12.2016</div>
                    </div>
                </a>
                <a href="#" class="news-grid__item news-item">
                    <div class="news-item__image-wrap">
                        <img class="news-item__image" src="<?php echo get_template_directory_uri();?>/images/news3.jpg">
                    </div>
                    <div class="news-item__desc news-item-desc">
                        <div class="news-item-desc__preview">Испанские ученые выяснили, что пальмовое масло провоцирует РАК. Оно используется в 90% кондитерских продуктов.</div>
                        <div class="news-item-desc__date">30.12.2016</div>
                    </div>
                </a>
                <a href="#" class="news-grid__item news-item">
                    <div class="news-item__image-wrap">
                        <img class="news-item__image" src="<?php echo get_template_directory_uri();?>/images/news4.jpg">
                    </div>
                    <div class="news-item__desc news-item-desc">
                        <div class="news-item-desc__preview">Испанские ученые выяснили, что пальмовое масло провоцирует РАК. Оно используется в 90% кондитерских продуктов.</div>
                        <div class="news-item-desc__date">30.12.2016</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="section-form">
        <div class="section-form__container container">
            <div class="section-form__header">
                <div class="section-form__title  ">Если есть вопрос, то задайте его нам</div>
                <div class="section-form__descr">Наши консультанты проконсультируют Вас и ответят на все вопросы</div>
            </div>
            <form class="form-request">
                <div class="form-request__line">
                    <textarea class="st-textarea " placeholder="Ваш запрос, информация о заболевании (диагноз), любая формулировка"></textarea>
                </div>
                <div class="form-request__line">
                    <div class="form-request__inputs">
                        <input class="form-request__input st-input " type="text" placeholder="ФИО">
                        <input class="form-request__input st-input " type="text" placeholder="Контактный телефон или email">
                    </div>
                </div>
                <div class="form-request__line">
                    <label class="st-label">
                        <div class="st-label__checkbox st-checkbox">
                            <input class="st-checkbox__input" type="checkbox">
                            <div class="st-checkbox__checkbox"></div>
                        </div>
                        <span class="st-label__text ">Отправляя запрос, я соглашаюсь на обработку своих персональных данных</span>
                    </label>
                </div>
                <p class="tac">
                    <a href="#" class="button ">Отправить бесплатный запрос</a>
                </p>
            </form>
        </div>
    </div>

    <div class="section section_grey">
        <div class="container">
            <div class="section__title">
                <div class="st-title fz50  ">Часто задаваемые вопросы</div>
            </div>
            <div class="faq-grid">
                <div class="faq-grid__item faq-item">
                    <div class="faq-item__title ">Какие программы прикрепления у вас есть?</div>
                    <div class="faq-item__text">У нас есть различные программы, о которых вы можете узнать, для этого вам нужно оставить заявку на нашем сайте, либо позвонить по номеру телефона, который указан на сайте (звонок бесплатный).</div>
                </div>
                <div class="faq-grid__item faq-item">
                    <div class="faq-item__title ">Какие программы прикрепления у вас есть?</div>
                    <div class="faq-item__text">У нас есть различные программы, о которых вы можете узнать, для этого вам нужно оставить заявку на нашем сайте, либо позвонить по номеру телефона.</div>
                </div>
                <div class="faq-grid__item faq-item">
                    <div class="faq-item__desc faq-item">
                        <div class="faq-item__title ">Можно ли заключить договор на меньший срок?</div>
                        <div class="faq-item__text">Договор на прикрепление заключается только на год (365 дней) с любой даты начала обслуживания.</div>
                    </div>
                </div>
                <div class="faq-grid__item faq-item">
                    <div class="faq-item__title ">Можно ли заключить договор на меньший срок?</div>
                    <div class="faq-item__text">Договор на прикрепление заключается только на год (365 дней) с любой даты начала обслуживания.</div>
                </div>
                <div class="faq-grid__item faq-item">
                    <div class="faq-item__title ">Какие программы прикрепления у вас есть?</div>
                    <div class="faq-item__text">У нас есть различные программы, о которых вы можете узнать, для этого вам нужно оставить заявку на нашем сайте, либо позвонить по номеру телефона, который указан на сайте (звонок бесплатный).</div>
                </div>
                <div class="faq-grid__item faq-item">
                    <div class="faq-item__title ">Какие программы прикрепления у вас есть?</div>
                    <div class="faq-item__text">У нас есть различные программы, о которых вы можете узнать, для этого вам нужно оставить заявку на нашем сайте, либо позвонить по номеру телефона, который указан на сайте (звонок бесплатный).</div>
                </div>
            </div>
        </div>
    </div>

        <!-- Block content end -->

        <!-- Footer block -->
        
<div class="section">
    <div class="container">
        <div class="social">
            <div class="social__instagram">
                <div class="section__title">
                    <div class="st-title fz50 tab-fz35 mob-fz25">Мы в instagram</div>
                </div>
                <div class="instagram-grid">
                    <a href="#" class="instagram-grid__item instagram-item">
                        <div class="instagram-item__image-wrap">
                            <img class="instagram-item__image" src="<?php echo get_template_directory_uri();?>/images/instagram1.jpg" alt="">
                        </div>
                        <div class="instagram-item__title tab-fz18">Зачем нужна диагностика организма?</div>
                        <div class="instagram-item__category tab-fz14">Рубрика: упражнения</div>
                        <div class="instagram-item__preview tab-fz14">Многие из нас довольно халатно относятся к своему здоровью, предпочитая не...</div>
                    </a>
                    <a href="#" class="instagram-grid__item instagram-item">
                        <div class="instagram-item__image-wrap">
                            <img class="instagram-item__image" src="<?php echo get_template_directory_uri();?>/images/instagram2.jpg" alt="">
                        </div>
                        <div class="instagram-item__title tab-fz18">Стресс и болезни сердца</div>
                        <div class="instagram-item__category tab-fz14">Рубрика: упражнения</div>
                        <div class="instagram-item__preview tab-fz14">Многие из нас довольно халатно относятся к своему здоровью, предпочитая не...</div>
                    </a>
                    <a href="#" class="instagram-grid__item instagram-item">
                        <div class="instagram-item__image-wrap">
                            <img class="instagram-item__image" src="<?php echo get_template_directory_uri();?>/images/instagram3.jpg" alt="">
                        </div>
                        <div class="instagram-item__title tab-fz18">ТОП-5 пластических операций</div>
                        <div class="instagram-item__category tab-fz14">Рубрика: упражнения</div>
                        <div class="instagram-item__preview tab-fz14">Многие из нас довольно халатно относятся к своему здоровью, предпочитая не...</div>
                    </a>
                    <a href="#" class="instagram-grid__item instagram-item">
                        <div class="instagram-item__image-wrap">
                            <img class="instagram-item__image" src="<?php echo get_template_directory_uri();?>/images/instagram4.jpg" alt="">
                        </div>
                        <div class="instagram-item__title tab-fz18">Диагностика заболеваний сердца</div>
                        <div class="instagram-item__category tab-fz14">Рубрика: упражнения</div>
                        <div class="instagram-item__preview tab-fz14">Многие из нас довольно халатно относятся к своему здоровью, предпочитая не...</div>
                    </a>
                </div>
            </div>
            <div class="social__facebook facebook">
                <div class="section__title">
                    <div class="st-title fz50 tab-fz35 mob-fz25">Мы в facebook</div>
                </div>
                <div class="facebook__item">
                    <img class="facebook__image" src="<?php echo get_template_directory_uri();?>/images/facebook.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>



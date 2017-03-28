<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nlc
 */

    $address = get_field('address', 189);
    $contacts = get_field('contacts', 189);
    $socials = get_field('social', 189);

    $instagram_arr = get_field('instagram', 189);
    $facebook = get_field('facebook', 189);

    $args = array(
        'category' => 12,
        'numberposts' => 4,
    );
    $news_arr = get_posts($args);
    $news_id = $news_arr['ID'];

?>

<div class="section">
    <div class="container">
        <div class="social">
            <div class="social__instagram">
                <div class="section__title">
                    <div class="st-title fz50 tab-fz35 mob-fz25">Мы в instagram</div>
                </div>
                <div class="instagram-grid">
                    <?php foreach ($news_arr as $news) : ?>
                        <a href="<?=get_post_permalink($news->ID); ?>" class="instagram-grid__item instagram-item">
                            <div class="instagram-item__image-wrap">
                                <img class="instagram-item__image" src="<?=get_the_post_thumbnail_url($news->ID); ?>" alt="">
                            </div>
                            <div class="instagram-item__title tab-fz18"><?=get_the_title($news->ID) ?></div>
                            <div class="instagram-item__preview tab-fz14"><?=mb_substr($news->post_content, 0, 110)."...";?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="social__facebook facebook">
                <div class="section__title">
                    <div class="st-title fz50 tab-fz35 mob-fz25">Мы в facebook</div>
                </div>
                <div class="facebook__item">
                    <img class="facebook__image" src="<?=$facebook; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-grid__info footer-info">
                <div class="footer-info__main">
                    <p class="footer-info__item"><?= $address ?></p>
                    <?php if ($contacts): ?>
                        <?php foreach ($contacts as $contact): ?>
                            <div class="footer-info__item contacts-flex">
                                <div class="contacts-flex__left">
                                    <?php if ($contact['contact_type'] == 'phone'): ?>
                                        <?= 'Телефон:' ?>
                                    <?php elseif ($contact['contact_type'] == 'email'): ?>
                                        <?= 'Email:' ?>
                                    <?php elseif ($contact['contact_type'] == 'other'):  ?>
                                        <?= $contact['contact_type_other']; ?>
                                    <?php endif; ?>
                                </div>

                                <div class="contacts-flex__right">
                                    <?php $contacts_data = $contact['contacts_data']; ?>

                                    <?php if ($contacts_data): ?>
                                        <?php foreach ($contacts_data as $contact_data): ?>
                                            <?php if ($contacts_data): ?>
                                                <p><a href="<?php   if ($contact['contact_type'] == 'phone'): echo 'tel:'.$contact_data['contact_data'];
                                                                    elseif ($contact['contact_type'] == 'email'): echo 'mailto:'.$contact_data['contact_data']; endif; ?>">
                                                <?= $contact_data['contact_data'];?></a></p>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <p class="footer-info__item">© 2017 «New Life Company»</p>
                </div>
                <p class="footer-info__conf"><a href="#">Соглашение о конфиденциальности</a></p>
            </div>

            <ul class="footer-grid__nav footer-nav">
                <?php $footer_menu = wp_get_nav_menu_items( 'footer_menu' ); ?>
                <?php foreach ($footer_menu as $item) : ?>
                    <li class="footer-nav__item">
                        <a class="footer-nav__link" href="<?=$item->url; ?>"><?=$item->title; ?></a>
                    </li>
                <?php endforeach; unset($footer_menu); ?>
            </ul>
            <div class="footer-grid__soc footer-soc">
                <div class="footer-soc__header">Мы в социальных сетях</div>
                <ul class="footer-soc__content soc-list">
                    <?php foreach ($socials as $social): ?>
                    <li class="soc-list__item">
                        <a class="soc-list__link" href="<?=$social['link']; ?>"><img src="<?=$social['icon']; ?>"></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="desktop-hide js-mobile-menu mobile-menu">
    <div class="mobile-menu__header">
        <a class="js-menu-close mobile-menu__close close-button" href="#"></a>
    </div>
    <ul class="main-menu">
        <?php $main_menu = buildTree(wp_get_nav_menu_items('main_menu'));  ?>
        <?php foreach ($main_menu as $item) :?>
            <li class="main-menu__item <?php if($item->sub) echo 'js-dropmenu-item'; ?>">
                <a class="main-menu__link <?php if($item->sub) echo 'js-dropmenu-button'; ?>"" href="<?=$item->url; ?>"><?=$item->title; ?></a>
                <?php if($item->sub) ?>
                <ul class="js-dropmenu-content main-menu__dropmenu menu-dropdown">
                    <?php foreach ($item->sub as $sub_item) :?>
                        <li class="menu-dropdown__item">
                            <a class="menu-dropdown__link" href="<?=$sub_item->url; ?>"><?=$sub_item->title; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php ?>
            </li>
        <?php endforeach; unset($main_menu); ?>
    </ul>
</div>

<div class="popup-feedback js-popup-feedback">
    <span class="js-close-popup popup__close"></span>
    <div class="popup-feedback__header">
        <div class="popup-feedback__title">Если есть вопрос, то задайте его нам</div>
        <div class="popup-feedback__descr">Наши консультанты проконсультируют Вас и ответят на все вопросы</div>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="461" title="Contact form 3" html_class="form-request"]'); ?>
</div>

<div class="js-overlay overlay-site"></div>

<?php
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js');
	wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vendor.js');

	wp_footer();
?>

</body>
</html>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nlc
 */


    $logo = get_field('logo', 265);
    $phone = get_field('phone', 265);
    $button_text = get_field('button_text', 265);


?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>


<div class="site-wrapper">
    <!-- Header block -->

    <header class="header">
        <div class="header__top container">
            <div class="main-header">
                <div class="main-header__logo logo">
                    <a class="logo__link" href="/"><img class="logo__image" src="<?=$logo;?>" alt="New Life Company"></a>
                </div>
                <div class="main-header__contacts">
                    <p class="main-header__phone"><a href="#" class="main-header__phone-link" href="tel:<?=$phone;?>"><?= $phone; ?></a></p>
                    <p class="main-header__free-call">бесплатный звонок по РФ</p>
                </div>
                <div class="main-header__button">
                    <button class="button__header button js-open-popup" type="button"><?=$button_text;?></button>
                </div>
                <div class="main-header__menu-button">
                    <button class="js-toggle-menu button-hamburger" type="button">
                        <span class="button-hamburger__line"></span>
                        <span class="button-hamburger__line"></span>
                        <span class="button-hamburger__line"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="header__bottom container">
            <?php $main_menu = buildTree(wp_get_nav_menu_items('main_menu'));  ?>
            <ul class="main-menu">
                <?php foreach ($main_menu as $item) :?>
                    <li class="main-menu__item <?php if($item->sub) echo 'main-menu__item_dropmenu'; ?>">
                        <a class="main-menu__link" href=" <?=$item->url; ?>"><?=$item->title; ?></a>
                        <?php if($item->sub) ?>
                            <ul class="main-menu__dropmenu menu-dropdown">
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
    </header>
    <!-- Header block end -->


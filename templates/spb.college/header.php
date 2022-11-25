<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$curPage = $APPLICATION->GetCurPAge();

?>

<!DOCTYPE html>
<html>
<head>
    <? include_once "framework/include.php"; ?>
    <title>
        <? $APPLICATION->ShowTitle();
        $GLOBALS['APPLICATION'] = $APPLICATION;
        ?>
    </title>
    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/main.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/header.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/slider-top.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/introduction.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/news.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/enrollee.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/slider-major.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/footer.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/fonts.css'); ?>
    <!--    --><? // $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/bootstrap/bootstrap-grid.css'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="wrapper">
    <div class="content">
        <header class="header-info">
            <div class="heade-info-box">
                <div class="header-info-title">
                    <div class="header-info-logo">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/header/header-info-logo.png" alt="Логотип">
                    </div>
                    <div class="header-info-text">
                        <span class="header-info-text__one">Санкт-Петербургское государственное бюджетное профессиональное образовательное учреждение</span>
                        <span class="header-info-text__two">Политехнический колледж городского хозяйства</span>
                    </div>
                    <div class="header-info-service">
                        <div class="header-info-service__search">
                            <input type="text" placeholder="поиск по сайту">
                            <button type="submit"></button>
                        </div>
                        <div class="header-info-service__language">
                            <div class="header-info-service__dropdown">
                                <span class="header-info-service__RU">RU</span>
                                <div class="header-info-service__dropdown-content">
                                    <a href="#">RU</a>
                                    <a href="#">EN</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-info-service__vision">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/header/header-info-service__vision.png"
                                 alt="Версия для слабовидящих">
                        </div>
                        <div class="header-info-login" onclick="location.href='/authentication'">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/header/header-info-login.png"
                                 alt="Войти на сайт с помощью логин пароля">
                        </div>
                    </div>
                </div>
                <nav class="header-menu">
                    <div class="header-menu__one">
                        <span class="header-menu__item"><a class="<?= "/" != $curPage || "/news" != $curPage ? "": "header-main-link" ?>"
                                    href="/">Главная</a></span>
                        <span class="header-menu__item"><a class="link" href="#">Профореинтация</a></span>
                        <span class="header-menu__item"><a class="<?= "/inner-page/" != $curPage ? "" : "header-main-link" ?>"
                                    href="/inner-page">Специальность</a></span>
                        <span class="header-menu__item"><a class="<?= "/about_us/" != $curPage ? "" : "header-main-link" ?>"
                                    href="/about-us">Сведения об ОО</a></span>
                        <span class="header-menu__item"><a class="link" href="#">Учебно-методический комплекс</a></span>
                        <span class="header-menu__item"><a class="link" href="#">Студенту</a></span>
                        <span class="header-menu__item"><a class="link" href="#">Библиотека</a></span>
                        <span class="header-menu__item"><a class="link" href="#">Абитурьенту</a></span>
                        <span class="header-menu__item"><a class="link" href="#">Производственное обучение</a></span>
                    </div>
                    <div class="header-menu__two">
                        <span class="header-menu__item"><a class="link" href="#">Работодателю</a></span>
                        <span class="header-menu__item"><a class="link"
                                                           href="#">Поступление на заочное отделение</a></span>
                        <span class="header-menu__item"><a class="link" href="#">ЦДО</a></span>
                        <span class="header-menu__item"><a class="link" href="#">Информация</a></span>
                        <span class="header-menu__item "><a class="<?= "/structure/" != $curPage ? "" : "header-main-link" ?>" href="/structure">Структура колледжа</a></span>
                        <span class="header-menu__item "><a class="<?= "/contacts/" != $curPage ? "" : "header-main-link" ?>" href="/contacts">Контакты</a></span>
                    </div>
                </nav>
            </div>
            <div class="heade-info-box-compact">
                <div class="heade-info-box-compact__logo">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/img/header/heade-info-box-compact__logo.png">
                </div>
                <div class="heade-info-box-compact__title">
                    Политехнический колледж городского хозяйства
                </div>
                <div class="heade-info-box-compact__hamburger">
                    <a href="#"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/img/header/heade-info-box-compact__hamburger.png"></a>
                </div>
            </div>

        </header>
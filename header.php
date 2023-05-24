<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mach
 */

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- フロートbtn フォント -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets//css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- =========カルーセル＝＝＝＝＝＝＝＝ -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- ＝＝＝＝＝＝＝カルーセル＝＝＝＝＝＝ -->

    <meta name="description" content="" />

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <!-- <link rel="dns-prefetch" href="https://maxcdn.bootstrapcdn.com" /> -->
    <link rel="dns-prefetch" href="https://www.googletagmanager.com" />

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?ver=6.2" id="bootstrap-js-js"></script>
  </head>
  <body>
    <div class="sp-menu">
      <div class="sp-menu__container">
        <a href="index.html" class="sp-nav__logo-link">
          <div class="sp-nav__logo">
            <img src="https://placehold.jp/240x23.png" width="240" height="23" alt="ロゴの画像" />
          </div>
        </a>
        <ul class="sp-nav__list">
          <li class="sp-nav__item"><a href="#" class="sp-nav__link">クリニックTOP</a></li>
          <li class="sp-nav__item"><a href="#" class="sp-nav__link">診療内容</a></li>
          <li class="sp-nav__item"><a href="#" class="sp-nav__link">よくある質問</a></li>
          <li class="sp-nav__item"><a href="#" class="sp-nav__link">お知らせ</a></li>
          <li class="sp-nav__item"><a href="#" class="sp-nav__link">お役立ち記事</a></li>
          <li class="sp-nav__item"><a href="#" class="sp-nav__link">アクセス</a></li>
          <li class="sp-nav__item"><a href="#" class="sp-nav__link">お問い合わせ</a></li>
        </ul>
        <div class="close js-close">
          <span class="close__icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/batu.svg" /></span>
        </div>
      </div>
    </div>
    <div class="footer-box">
      <div class="footer__flex">
        <div class="menu-toggle js-spmenu"><img src="https://placehold.jp/150x150.png" /></div>
        <div class="page-bottom">
          <a href="#" class="page-bottom__link">
            <div class="page-bottom__text">予約枠を確認・予約する</div>
          </a>
        </div>
      </div>
    </div>

    <script>
      $(".js-spmenu").on("click", function () {
        $(".sp-menu").addClass("is_open");

      });
      $(".sp-menu").on("click", function () {
        $(".sp-menu").removeClass("is_open");
        $(".sp-menu").style.display = "none";
      });
      $(function () {
        var scrollPosition;
        $(".js-spmenu").on("click", function () {
          scrollPosition = $(window).scrollTop();
          $("body").addClass("fixed").css({ top: -scrollPosition });
        });
        $(".js-close").on("click", function () {
          $("body").removeClass("fixed").css({ top: 0 });
          window.scrollTo(0, scrollPosition);
        });
      });
    </script>

    <section id="top">
      <div class="container-header__nav">
        <div class="header__flex">
          <div class="header-logo">
            <a href="/" class="header-logo__link">
              <div class="top-logo__box">
                <div><img src="https://placehold.jp/240x23.png" width="240" height="23" alt="ロゴの画像" /></div>
              </div>
            </a>
            <h5 class="header__address">兵庫県西脇市黒田庄123-5 大国神社前</h5>
          </div>
          <div class="header-navigation">
            <ul class="header-nav__list">
              <li class="header-nav__item"><a href="#" class="header-nav__link">診療内容</a></li>
              <li class="header-nav__item"><a href="#" class="header-nav__link">よくある質問</a></li>
              <li class="header-nav__item"><a href="#" class="header-nav__link">お知らせ</a></li>
              <li class="header-nav__item"><a href="#" class="header-nav__link">お役立ち記事</a></li>
              <li class="header-nav__item"><a href="#" class="header-nav__link">アクセス</a></li>
              <li class="header-nav__item"><a href="#" class="header-nav__link">お問い合わせ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

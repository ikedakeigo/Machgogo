// JQuery の shorthand method である $(document).ready() を使用して、
// ページのロード完了時に以下のスクリプトを実行するようにします。
$(document).ready(function () {
  // 初期設定：メニューを非表示、アコーディオンコンテンツを非表示に設定します
  jQuery(".accordion-content").css("display", "none");

  // SPメニューのクリックイベント
  var scrollPosition;
  $(".js-spmenu").on("click", function () {
    // SPメニューを表示し、body要素に固定クラスを追加し、スクロール位置を保持します
    $(".sp-menu").addClass("is_open");
    scrollPosition = $(window).scrollTop();
    $("body").addClass("fixed").css({ top: -scrollPosition });
  });

  // SPメニューまたは閉じるボタンがクリックされたときのイベント
  $(".js-close").on("click", function () {
    // SPメニューを非表示にし、body要素から固定クラスを削除し、スクロール位置を復元します
    $(".sp-menu").removeClass("is_open");
    $("body").removeClass("fixed").css({ top: 0 });
    window.scrollTo(0, scrollPosition);
  });

  // アコーディオンのクリックイベント
  jQuery(".js-accordion-title").on("click", function () {
    // アコーディオンコンテンツをトグル表示し、アコーディオンタイトルの状態をトグルします
    jQuery(this).next().slideToggle(200);
    jQuery(this).toggleClass("open", 200);
  });

  // スライダーの設定
  var imageUrls = ["/assets/img/mach_mv.png", "/assets/img/mach_mv_2.png", "/assets/img/mach_mv_3.png", "/assets/img/mach_mv_4.png", "/assets/img/mach_mv_2.png"];
  var slider = $(".slick-slider");
  imageUrls.forEach(function (url) {
    slider.append('<div class="slick-slide mv_slideHeght" style="background-image: url(' + url + ')"></div>');
  });
  slider.slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    cssEase: "linear",
  });

  // full-screen スライダーの設定
  $(".full-screen").slick({
    centerMode: true,
    centerPadding: "5%",
    dots: true,
    autoplay: true,
    autoplaySpeed: 2800,
    infinite: true,
    pauseOnFocus: false,
    pauseOnHover: false,
  });
});

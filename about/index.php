<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mach
 */

get_header();
?>

<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mach' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mach' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    <header class="header">
      <div class="container-front">
        <div class="front-text">
          <p class="front-text__main">駅なかクリニックで<br class="is-sp">音速で帰ろう</p>
          <div class="front-text__secondary">
            当院は熱がある、お腹が痛い、鼻水など体に不調のある方が、
            <span class="highlight">忙しい日常の合間</span>
            に気軽に予約・受診できることを目指します。
          </div>
        </div>
        <a href="/reserve-page" class="front-button__link">
          <div class="front-button">
            <div class="reservation-text">・予約する<br />・予約確認</div>
          </div>
        </a>
      </div>
    </header>

    <main class="main">


<section class="container">
        <div class="covid19-attention">
          <p class="attention-title">発熱等、風邪症状のある方</p>
          <p class="attention-text">
            お電話でのご連絡は診療の妨げとなり、大変迷惑なので、おやめください。<br /><br />
            <a class="covid19-reservation-link" href="#">こちら</a>を参照ください。
          </p>
        </div>
        <div id="reservation">
          <h2 class="main_title">本日の診療状況</h2>
          <div class="border"></div>
          <div class="reservation-box">
            <div class="background-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg_box.svg" alt="予約セル表" class="background-image-cell" />
              <div class="status"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/status03.svg" alt="9:00-12:00" /></div>
              <div class="status"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/status03.svg" alt="12:00-14:00" /></div>
              <div class="status"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/status03.svg" alt="15:00-19:00" /></div>
              <div class="status"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/status03.svg" alt="19:00-20:00" /></div>
            </div>
          </div>
        </div>
      </section>
      <section id="medical">
        <div class="medical-content container inner">
          <h2 class="main_title">診療内容</h2>
          <div class="border"></div>
          <div class="medical-content__flex">
            <div class="medical-content__item">
              <a href="#">
                <div class="item-content">
                  <div class="item-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/internal@2x.png" width="72" height="72" alt="" /></div>
                  <div class="item-content__text">一般内科<br />（風邪・花粉症など）</div>
                </div>
              </a>
            </div>
            <div class="medical-content__item">
              <a href="#">
                <div class="item-content">
                  <div class="item-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/oclep.png" width="72" height="72" alt="" /></div>
                  <div class="item-content__text">ピル</div>
                </div>
              </a>
            </div>
            <div class="medical-content__item">
              <a href="#">
                <div class="item-content">
                  <div class="item-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fim.png" width="72" height="72" alt="" /></div>
                  <div class="item-content__text">月経・妊娠・オリモノ</div>
                </div>
              </a>
            </div>
            <div class="medical-content__item">
              <a href="#">
                <div class="item-content">
                  <div class="item-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/prevention@2x.png" width="72" height="72" alt="" /></div>
                  <div class="item-content__text">HPVワクチン<br />(子宮頸がんワクチン)</div>
                </div>
              </a>
            </div>
            <div class="medical-content__item">
              <a href="#">
                <div class="item-content">
                  <div class="item-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gynecology@2x.png" width="72" height="72" alt="" /></div>
                  <div class="item-content__text">ブライダルチェック</div>
                </div>
              </a>
            </div>
            <div class="medical-content__item">
              <a href="#">
                <div class="item-content">
                  <div class="item-content__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ec.png" width="72" height="72" alt="" /></div>
                  <div class="item-content__text">アフターピル</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id="value">
        <div class="container">
          <h2 class="main_title">当院の提供価値</h2>
          <div class="border"></div>
          <div class="value-container">
            <div class="value-item">
              <div class="value-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/value1@2x.png" width="106" height="106" alt="" />
              </div>
              <div class="value-item__text">
                <h3 class="sub_title">
                  紙の診察券なし<br class="is-sp">スマホで受付</h3>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/value2@2x.png" width="106" height="106" alt="" />
              </div>
              <div class="value-item__text">
                <h3 class="sub_title">
                  キャッシュレス決済OK
                </h3>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/value3@2x.png" width="106" height="106" alt="" />
              </div>
              <div class="value-item__text">
                <h3 class="sub_title">
                  診察室を出たら<br class="is-sp">
                  そのまま薬局へ
                </h3>
              </div>
            </div>
            <div class="value-item">
              <div class="value-item__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/value4@2x.png" width="106" height="106" alt="" />
              </div>
              <div class="value-item__text">
                <h3 class="sub_title">薬局とも待ち時間削減の連携が可能に</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="features">
        <div class="container inner">
          <h2 class="main_title">当院の特徴</h2>
          <div class="border"></div>
          <div class="section">
            <div class="slider-area">
              <div class="full-screen slider">
                <div class="slide">
                  <img src="https://placehold.jp/cc9999/993333/640x360.png" alt="125naroom" />
                  <div class="slide-title">小さいけれど安らぐ</div>
                  <div class="slide-description">アフターコロナに相応しく、対人接触の少ない待合室</div>
                </div>
                <div class="slide">
                  <img src="https://placehold.jp/cc9999/993333/640x360.png" alt="125naroom" />
                  <div class="slide-title">忙しい、オフィスワーカーの方向け</div>
                  <div class="slide-description">カンタン予約や事前問診など、時間のムダを省くしくみ</div>
                </div>
                <div class="slide">
                  <img src="https://placehold.jp/cc9999/993333/640x360.png" alt="125naroom" />
                  <div class="slide-title">通院のハードルが低い</div>
                  <div class="slide-description">駅直結のビル内にあって通いやすく、24時間予約できる</div>
                </div>
                <div class="slide">
                  <img src="https://placehold.jp/cc9999/993333/640x360.png" alt="125naroom" />
                  <div class="slide-title">行きたい時間に、行ける</div>
                  <div class="slide-description">ランチタイムにも行ける。土日祝OK。夜も20時まで</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="">
        <div class="container inner">
          <h2 class="main_title">診療の流れ</h2>
          <div class="border"></div>
          <div class="medical-steps">
            <div class="medical-step">
              <div class="step-number__pc">1</div>
              <div class="step-number__pc-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medical1@2x.png" width="106" height="85" alt="" class="img" />
              </div>
              <div class="step-content">
                <div class="step-title">
                  <div class="step-number__sp">1</div>
                  <div class="step-text">スマホで予約</div>
                </div>
                <p class="step-desc">
                  予約はスマホで簡単に。<br />オンラインのみの受付です。
                </p>
              </div>
            </div>
            <div class="medical-step">
              <div class="step-number__pc">2</div>
              <div class="step-number__pc-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medical1@2x.png" width="106" height="85" alt="" class="img" />
              </div>
              <div class="step-content">
                <div class="step-title">
                  <div class="step-number__sp">2</div>
                  <div class="step-text">来院</div>
                </div>
                <p class="step-desc">
                  診療の待ち時間を最少でご案内。院外のカフェなどでもお待ちいただけます。
                </p>
              </div>
            </div>
            <div class="medical-step">
              <div class="step-number__pc">3</div>
              <div class="step-number__pc-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medical1@2x.png" width="106" height="85" alt="" class="img" />
              </div>
              <div class="step-content">
                <div class="step-title">
                  <div class="step-number__sp">3</div>
                  <div class="step-text">診察</div>
                </div>
                <p class="step-desc">
                  無駄なく、丁寧な診察を心がけます。必要に応じて、他の医療機関をご紹介します。
                </p>
              </div>
            </div>
            <div class="medical-step">
              <div class="step-number__pc">4</div>
              <div class="step-number__pc-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/medical1@2x.png" width="106" height="85" alt="" class="img" />
              </div>
              <div class="step-content">
                <div class="step-title">
                  <div class="step-number__sp">4</div>
                  <div class="step-text">処方箋受付・帰宅</div>
                </div>
                <p class="step-desc">
                  スムーズな薬の受け取りができるよう工夫をしています。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="business_hours">
        <div class="container inner">
          <h2 class="main_title">診療時間</h2>
          <div class="border"></div>
          <div class="schedule">
            <div class="schedule-row">
              <h5><div class="schedule-day">平日・土日祝</div></h5>
              <h5><div class="schedule-time">9:00〜20:00</div></h5>
            </div>
            <div class="schedule-row">
              <h6><span class="schedule-label">休診日</span></h6>
              <h6><span class="schedule-day">火・水</span></h6>
              <h6><span class="schedule-label">休憩</span></h6>
              <h6><span class="schedule-time__holiday">14:00〜15:00</span></h6>
            </div>
          </div>
          <div class="features-list">
            <div class="feature-item">
              <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon1.png" width="88" height="88" /></div>
              <div class="feature-text">
                <h5>ランチタイム<br />診療OK</h5>
              </div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="88" height="88" /></div>
              <div class="feature-text">
                <h5>土日・祝日<br />診療OK</h5>
              </div>
            </div>
            <div class="feature-item">
              <div class="feature-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon3.png" width="88" height="88" /></div>
              <div class="feature-text">
                <h5>18時以降<br />診療OK</h5>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="question">
        <div class="container inner">
          <h2 class="main_title">よくある質問</h2>
          <div class="border"></div>
          <div id="accordion" class="accordion-container">
            <div class="question-item accordion-title js-accordion-title">
              <div class="question-icon">Q</div>
              <div class="question-title">診療時間は何時までですか？</div>
            </div>
            <div class="answer-content accordion-content">
              <div class="answer-box">
                <div class="answer-icon">A</div>
                <div class="answer-text">
                  <p class="a_tex">診療時間は9：00から20:00までとなっており、会社の帰りにも立ち寄っていただきやすくなっています。<br />※14:00～15:00は昼休みです。<br />コロナ感染状況など考慮し、現在は20:00まで。</p>
                </div>
              </div>
            </div>
            <!--/.accordion-content-->
            <div class="question-item accordion-title js-accordion-title">
              <div class="question-icon">Q</div>
              <div class="question-title">診療時間は何時までですか？</div>
            </div>
            <div class="answer-content accordion-content">
              <div class="answer-box">
                <div class="answer-icon">A</div>
                <div class="answer-text">
                  <p class="a_tex">診療時間は9：00から20:00までとなっており、会社の帰りにも立ち寄っていただきやすくなっています。<br />※14:00～15:00は昼休みです。<br />コロナ感染状況など考慮し、現在は20:00まで。</p>
                </div>
              </div>
            </div>
            <!--/.accordion-content-->
            <div class="question-item accordion-title js-accordion-title">
              <div class="question-icon">Q</div>
              <div class="question-title">診療時間は何時までですか？</div>
            </div>
            <div class="answer-content accordion-content">
              <div class="answer-box">
                <div class="answer-icon">A</div>
                <div class="answer-text">
                  <p class="a_tex">診療時間は9：00から20:00までとなっており、会社の帰りにも立ち寄っていただきやすくなっています。<br />※14:00～15:00は昼休みです。<br />コロナ感染状況など考慮し、現在は20:00まで。</p>
                </div>
              </div>
            </div>
            <!--/.accordion-content-->
            <div class="question-item accordion-title js-accordion-title">
              <div class="question-icon">Q</div>
              <div class="question-title">診療時間は何時までですか？</div>
            </div>
            <div class="answer-content accordion-content">
              <div class="answer-box">
                <div class="answer-icon">A</div>
                <div class="answer-text">
                  <p class="a_tex">診療時間は9：00から20:00までとなっており、会社の帰りにも立ち寄っていただきやすくなっています。<br />※14:00～15:00は昼休みです。<br />コロナ感染状況など考慮し、現在は20:00まで。</p>
                </div>
              </div>
            </div>
            <!--/.accordion-content-->
            <div class="question-item accordion-title js-accordion-title">
              <div class="question-icon">Q</div>
              <div class="question-title">診療時間は何時までですか？</div>
            </div>
            <div class="answer-content accordion-content">
              <div class="answer-box">
                <div class="answer-icon">A</div>
                <div class="answer-text">
                  <p class="a_tex">診療時間は9：00から20:00までとなっており、会社の帰りにも立ち寄っていただきやすくなっています。<br />※14:00～15:00は昼休みです。<br />コロナ感染状況など考慮し、現在は20:00まで。</p>
                </div>
              </div>
            </div>
            <!--/.accordion-content-->
            <div class="question-item accordion-title js-accordion-title">
              <div class="question-icon">Q</div>
              <div class="question-title">診療時間は何時までですか？</div>
            </div>
            <div class="answer-content accordion-content">
              <div class="answer-box">
                <div class="answer-icon">A</div>
                <div class="answer-text">
                  <p class="a_tex">診療時間は9：00から20:00までとなっており、会社の帰りにも立ち寄っていただきやすくなっています。<br />※14:00～15:00は昼休みです。<br />コロナ感染状況など考慮し、現在は20:00まで。</p>
                </div>
              </div>
            </div>
            <!--/.accordion-content-->
          </div>
          <!--/#accordion-->
          <div id="btn_set">
            <div class="button-wrapper"><a href="#" class="button">すべてみる</a></div>
          </div>
        </div>
      </section>
      <section id="notice">
        <div class="container inner">
          <h2 class="main_title">お知らせ</h2>
          <div class="border"></div>
          <div class="notice-list">
            <div class="notice-item">
              <a href="#">
                <div class="notice-date">
                  <div class="date-text">2023-03-16</div>
                </div>
                <h3>2023年3月の臨時休診</h3>
              </a>
            </div>
            <div class="notice-item">
              <a href="#">
                <div class="notice-date">
                  <div class="date-text">2023-01-22</div>
                </div>
                <h3>2023年2月16日休館日のお知らせ</h3>
              </a>
            </div>
            <div class="notice-item">
              <a href="#">
                <div class="notice-date">
                  <div class="date-text">2022-11-25</div>
                </div>
                <h3>2022/2023 年末年始の休診</h3>
              </a>
            </div>
            <div class="notice-item">
              <a href="#">
                <div class="notice-date">
                  <div class="date-text">2022-09-01</div>
                </div>
                <h3>2022年9月の臨時休診</h3>
              </a>
            </div>
          </div>
          <div id="btn_set">
            <div class="button-wrapper"><a href="#" class="button">すべてみる</a></div>
          </div>
        </div>
      </section>
      <section id="articles">
        <div class="container inner">
          <h2 class="main_title">お役立ち記事</h2>
          <div class="border"></div>
          <div class="articles-grid">
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <div class="article-item">
              <a href="#">
                <div class="article-image">
                  <img src="https://placehold.jp/cc9999/993333/150x150.png" alt="テスト投稿" />
                </div>
                <div class="article-details">
                  <h6>2023-04-17 <span class="category"> Uncategorized </span></h6>
                  <h4>テスト投稿</h4>
                </div>
              </a>
            </div>
            <!-- More article-items -->
          </div>
          <div class="button-wrapper">
            <a href="#" class="button">すべてみる</a>
          </div>
        </div>
      </section>
      <section id="move_section" class="video-section">
        <div class="move-container">
          <img src="https://placehold.jp/cc9999/993333/560x315.png" alt="動画" />
          <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/TRbt9JSfOrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>
      </section>
    </main>
		<footer class="footer">
      <div class="container inner">
        <div class="footer-content">
          <div class="footer-logo">
            <img src="https://placehold.その部分が凍ててました､jp/cc9999/993333/240x23.png" width="240" height="23" alt="" />
          </div>
          <h6 class="footer-department">内科</h6>
          <div class="footer-info">
            <div class="footer-address">
              <p>〒810-0001</p>
              <p>兵庫県西脇市黒田庄123-5<br />大国神社前</p>
              <div class="footer-map-link"><a href="#" target="_blank">Googleマップでみる</a></div>
            </div>
            <div class="footer-schedule">
              <table class="footer-schedule__table">
                <tr>
                  <th class="footer-schedule__day">診療時間</th>
                  <th>月</th>
                  <th>火</th>
                  <th>水</th>
                  <th>木</th>
                  <th>金</th>
                  <th>土</th>
                  <th>日</th>
                </tr>
                <tr>
                  <td class="footer-schedule__time">09:00-14:00</td>
                  <td>◯</td>
                  <td class="footer-schedule__closed">休</td>
                  <td class="footer-schedule__closed">休</td>
                  <td>◯</td>
                  <td>◯</td>
                  <td>◯</td>
                  <td>◯</td>
                </tr>
                <tr>
                  <td class="footer-schedule__time">15:00-20:00</td>
                  <td>◯</td>
                  <td class="footer-schedule__closed">休</td>
                  <td class="footer-schedule__closed">休</td>
                  <td>◯</td>
                  <td>◯</td>
                  <td>◯</td>
                  <td>◯</td>
                </tr>
              </table>
              <p class="footer-closed-day">休診日: 火曜日、水曜日<span class="footer-break">昼休み: 14:00-15:00</span></p>
              <div class="footer-remarks">最寄り調剤薬局の営業時間は20時まで</div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>© 2023</p>
        </div>
      </div>
    </footer>

    <script>
      jQuery(".accordion-content").css("display", "none");
      jQuery(function ($) {
        jQuery(".js-accordion-title").on("click", function () {
          jQuery(this).next().slideToggle(200);
          jQuery(this).toggleClass("open", 200);
        });
      });
      $(document).on("ready", function () {
        $(".full-screen").slick({ centerMode: true, centerPadding: "5%", dots: true, autoplay: true, autoplaySpeed: 2800, infinite: true, pauseOnFocus: false, pauseOnHover: false });
      });
    </script>

		<?php wp_footer(); ?>

  </body>
</html>


<?php
// get_sidebar();
// get_footer();

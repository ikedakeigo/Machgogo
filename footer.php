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

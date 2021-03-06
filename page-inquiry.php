<?php get_header(); ?>

<section id="mainvisual-common" class="mainvisual-common">
  <div class="inner">
    <div class="mainvisual-common-imgs">
      <div class="mainvisual-text1">
        <img class="mainvisual-text-left" src="<?php echo get_template_directory_uri(); ?>/img/top_text@2x.png" alt="">
      </div><!-- /.mainvisual-text1 -->
      <div class="mainvisual-text2">
        <img class="mainvisual-text-right" src="<?php echo get_template_directory_uri(); ?>/img/top_text_left@2x.png" alt="">
      </div><!-- /.mainvisual-text2 -->
    </div><!-- /.news-archive-imgs -->
    <div class="mainvisual-common-btn">
      <a href="#" class="btn-red mainvisual-common-btn-red">チケット予約サイトへ</a><!-- /.btn-red -->
    </div><!-- /.top-btn -->
  </div><!-- /.inner news-archive-inner -->
</section>

<main>
  <div class="inner">
    <div class="breadcrumb">
      <?php bcn_display(); ?>
    </div>
  </div>
  <!--inner-->

  <section class="inquiry">
    <h2 class="section-title inquiry-title">INQUIRY</h2><!-- /.section-title inquiry-title -->
    <div class="inner inquiry-inner">

      <div class="contact__item">
        <p class="inquiry-text">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br> 公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
          お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p><!-- /.inquiry-text -->
      <?php echo do_shortcode('[contact-form-7 id="120" title="卒業制作フォーム"]'); ?>


        <!-- <form action="#">
          <dl class="contact__controls">
            <div class="contact__control">
              <dt>
                <label class="contact__label contact__label--required" for="your-name">お名前</label>
              </dt>
              <dd>
                <input id="your-name" class="form-input" type="text" name="your-name" value="" required>
              </dd>
            </div>
            <div class="contact__control">
              <dt>
                <label class="contact__label contact__label--required" for="your-tel">電話</label>
              </dt>
              <dd>
                <input id="your-tel" class="form-input" type="tel" name="your-tel" value="" required>
              </dd>
            </div>
            <div class="contact__control">
              <dt>
                <label class="contact__label contact__label--required" for="your-mail">メールアドレス</label>
              </dt>
              <dd>
                <input id="your-mail" class="form-input" type="email" name="your-mail" value="" required>
              </dd>
            </div>

            <div class="contact__control">
              <dt>
                <label class="contact__label label-textarea" for="your-message">内容</label>
              </dt>
              <dd>
                <textarea id="your-message" class="form-textarea" name="your-message"></textarea>
              </dd>
            </div>
          </dl>

          <div class="contact__submit">
            <input id="input-submit" class="btn-red contact-btn" type="submit" value="送信する">
          </div>
        </form> -->
      </div>






    </div><!-- /.inner inquiry-inner -->
  </section><!-- /.inquiry -->








  <section class="schedule" id="inquiry">
    <div class="inner schedule-inner">
      <div class="schedule-top">
        <h2 class="section-title schedule-title">SCHEDULE</h2><!-- /.section-title -->
        <ul class="schedule-nav">
          <li class="schedule-nav-item">
            <p>2020.7.04</p>
            <p>17:00開演</p>
            <p>中野ZERO大ホール</p>
            <a href="#" class="schedule-nav-item-link">チケット予約受付中</a>
          </li><!-- /.schedule-nav-item -->
          <li class="schedule-nav-item">
            <p>2020.7.04</p>
            <p>17:00開演</p>
            <p>中野ZERO大ホール</p>
            <a href="#" class="schedule-nav-item-link">チケット予約受付中</a>
          </li><!-- /.schedule-nav-item -->
          <li class="schedule-nav-item">
            <p>2020.7.04</p>
            <p>17:00開演</p>
            <p>中野ZERO大ホール</p>
            <a href="#" class="schedule-nav-item-link">チケット予約受付中</a>
          </li><!-- /.schedule-nav-item -->
          <li class="schedule-nav-item">
            <p>2020.7.04</p>
            <p>17:00開演</p>
            <p>中野ZERO大ホール</p>
            <a href="#" class="schedule-nav-item-link">チケット予約受付中</a>
          </li><!-- /.schedule-nav-item -->
        </ul><!-- /.schedule-nav -->
      </div><!-- /.footer-top -->
    </div><!-- /.inner -->
    <div class="schedule-btns">
      <a href="#" class="btn-brown schedule-brown-btn">お問い合わせはこちら</a><!-- /.btn-brown -->
      <a href="#" class="btn-red schedule-red-btn">チケット予約サイトへ</a><!-- /.btn-red -->
    </div><!-- /.schedule-btns -->
  </section><!-- /.schedule -->

</main>
<div id="page-top"><a href="#"><img src="../img/totop.png" alt=""></a></div>

<footer>
  <p>Copyright © 2019 完全版マハーバーラタ All Rights Reserved.</p>
</footer>

<script>
  document.addEventListener('wpcf7mailsent', function(event) {
    location = '<?php get_template_directory_uri(); ?>/confilm';
  }, false);
</script>
<?php get_footer(); ?>
</body>

</html>
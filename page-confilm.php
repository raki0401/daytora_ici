<?php get_header(); ?>

  <section id="mainvisual-common" class="mainvisual-common">
    <div class="inner">
      <div class="mainvisual-common-imgs">
        <div class="mainvisual-text1">
          <img class="mainvisual-text-left" src="../img/top_text@2x.png" alt="">
        </div><!-- /.mainvisual-text1 -->
        <div class="mainvisual-text2">
          <img class="mainvisual-text-right" src="../img/top_text_left@2x.png" alt="">
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
      <div class="inner confilm-inner">
        <div class="section-title confilm-title">INQUIRY</div><!-- /.section-title confilm-title -->
        <div class="confilm-inquiry">
          <p class="confilm-text">お問い合わせありがとうございました。 <br>メッセージは正常に送信されました。</p><!-- /.confilm-text -->
        </div><!-- / -->
      </div><!-- /.inner -->
    </section><!-- /.inquiry -->

    <section id="news" class="news ">
      <div class="inner news-inner">
        <h2 class="section-title news-title confilm-news-title">LATEST NEWS</h2><!-- /.section-title -->
        <div class="news-items ">
          <?php
           $news_query = new WP_Query(
            array(
              'post_type' => 'post',
              'category_name' => 'news',
              'posts_per_page' => 5,
            )
          );
          ?>
        <?php if ($news_query -> have_posts()) :  ?>
          <?php while ($news_query -> have_posts()) :  $news_query -> the_post();  ?>

            <a href="<?php the_permalink(); ?>" class="news-item ">
              <div class="news-img">
                <?php
                    if (has_post_thumbnail()) :
                      $id = get_post_thumbnail_id();
                      $img = wp_get_attachment_image_src($id, 'large');
                    endif;
                    ?>
                <img src="<?php echo $img[0]; ?>" alt="">
              </div><!-- /.news-img -->
              <div class="news-item-bottom">
                <time><?php echo get_the_time('Y.m.j') ?></time>
                <h4><?php echo get_the_title() ?></h4>
              </div><!-- /.news-item-bottom -->
            </a><!-- /.news-item -->

          <?php endwhile;  ?>
        <?php endif;  ?>
        <?php wp_reset_postdata(); ?>

        </div><!-- /.news-items -->
        <div class="news-btn">
          <a href="./news_archive.html" class="btn-red news-btn-red">ニュース一覧へ</a>
        </div><!-- /.news-btn -->
      </div><!-- /.inner -->
    </section><!-- /.news -->








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

  
 <?php get_footer(); ?>
</body>

</html>
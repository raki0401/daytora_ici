<?php get_header(); ?>

  <section id="mainvisual-common" class="mainvisual-common">
    <div class="inner">
      <div class="mainvisual-common-imgs">
        <div class="mainvisual-text1">
          <img class="mainvisual-text-left" src="<?php echo get_template_directory_uri() ;?>/img/top_text@2x.png" alt="">
        </div><!-- /.mainvisual-text1 -->
        <div class="mainvisual-text2">
          <img class="mainvisual-text-right" src="<?php echo get_template_directory_uri() ;?>/img/top_text_left@2x.png" alt="">
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

      <section class="news-single">
        <div class="inner news-single-inner">
          <div class="section-title news-single-title">NEWS</div><!-- /.section-title -->
          <div class="news-single-item">
            <!-- <div class="news-single-img-wrap"> -->
            <?php
                    if (has_post_thumbnail()) :
                      $id = get_post_thumbnail_id();
                      $img = wp_get_attachment_image_src($id, 'large');
                    endif;
                    ?>
                <img src="<?php echo $img[0]; ?>" alt="">

            <div class="middle-text">
              <!-- <time datetime="2019-9-30">2019.9.30</time> -->
              <?php	the_time('Y.m.j');	?>
              <p><?php the_title(); ?></p>
            </div><!-- /.middle-text -->
            <div class="bottom-text">
              <p><?php the_content(); ?></p>
            </div><!-- /.bottom-text -->
          </div><!-- /.news-single-item -->
        </div><!-- /.inner news-single-inner -->
      </section>

      <div class="news-single-pagination">
        <div class="pagination-left">
          <time datetime="2019-9-28">2019.9.28</time>
          <p class="pagination-text">前のニュース投稿のタイトル前のニュース投稿のタイトル前のニュース投稿のタイトル</p><!-- /.pagination-text -->
        </div><!-- /.pagination-left -->
        <div class="pagination-right">
          <div class="time-wrap">
            <time datetime="2019-10-01">2019.10.01</time>
          </div><!-- /.time-wrap -->
          <p class="pagination-text">次のニュース投稿のタイトル次のニュース投稿のタイトル</p><!-- /.pagination-text -->
        </div><!-- /.pagination-left -->
      </div><!-- /.news-single-pagination -->

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
    </div><!--inner-->
  </main>
  <div id="page-top"><a href="#"><img src="../img/totop.png" alt=""></a></div>

  <footer>
    <p>Copyright © 2019 完全版マハーバーラタ All Rights Reserved.</p>
  </footer>

  <?php	get_footer();	?>
</body>

</html>
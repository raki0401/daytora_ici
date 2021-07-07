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
        <a href="<?php $page_id = get_page_by_path('inquiry'); echo esc_url(get_permalink($page_id)); ?>" class="btn-red mainvisual-common-btn-red">チケット予約サイトへ</a><!-- /.btn-red -->
      </div><!-- /.top-btn -->
    </div><!-- /.inner news-archive-inner -->
  </section>

  <div class="inner">
    <div class="breadcrumb">
    <?php bcn_display(); ?>
    </div>
  </div><!-- /.inner -->

  <section class="archive-news " id="archive-news">
    <div class="inner archive-news-inner">
      <h2 class="section-title archive-news-title">NEWS</h2><!-- /.section-title -->
      <div class="archive-news-items ">
        <?php if (have_posts()) :  ?>
          <?php while (have_posts()) :  the_post();  ?>

            <a href="<?php the_permalink(); ?>" class="archive-news-item ">
              <div class="archive-news-img">
                <?php
                    if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                      the_post_thumbnail();
                    }
                    ?>
              </div><!-- /.archive-news-img -->
              <div class="archive-news-item-bottom">
                <!-- <time datetime="2019-09-30">2019.9.30</time> -->
                <?php the_time('Y.m.j');  ?>
                <h4><?php the_content(); ?></h4>
              </div><!-- /.archive-news-item-bottom -->
            </a><!-- /.archive-archive-news-item -->

          <?php endwhile;  ?>
        <?php endif;  ?>

      </div>
    </div>
  </section>

  <?php if(paginate_links()) :?>
  <div class="news-pagination">
  <?php
echo
paginate_links(
array(
'end_size' => 1,
'mid_size' => 1,
'prev_next' => true,
'prev_text' => '<i class="fas fa-angle-left"></i>',
'next_text' => '<i class="fas fa-angle-right"></i>',
)
);
?>
    <!-- <span class="news-pagination-1">1</span>
    <span class="news-pagination-2">2</span>
    <span class="news-pagination-next">&gt;</span> -->

  </div><!-- /.pagination -->
<?php endif; ?>
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

  <div id="page-top"><a href="#"><img src="../img/totop.png" alt=""></a></div>

  <footer>
    <p>Copyright © 2019 完全版マハーバーラタ All Rights Reserved.</p>
  </footer>

  <?php get_footer();  ?>
</body>

</html>
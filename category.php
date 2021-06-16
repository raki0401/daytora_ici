<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <header id="header">
    <div class="nav-wrap">
      <nav class="header-nav">
        <ul>
          <li><a href="<?php echo get_template_directory_uri(); ?>" class="header-nav-top little">TOP</a></li>
          <li><a href="#news" class="header-nav-news">NEWS</a></li>
          <li><a href="story.html" class="header-nav-story">STORY</a></li>
          <li><a href="comments.html" class="header-nav-comments">COMMENTS</a></li>
          <li><a href="cast.html" class="header-nav-cast little2">CAST</a></li>
          <li><a href="inquiry.html" class="header-nav-inquiry">INQUIRY</a></li>
        </ul>
      </nav>
      <!-- <div class="next-btn">＞</div> -->
    </div><!-- /.nav-wrap -->
    <div class="hamburger-btn"><span></span></div>
  </header>

  <!--開いた時の背景の暗い色の部分-->
  <div class="hamburger-back"></div>

  <!--開いた時のメニュー-->
  <nav class="hamburger">
    <ul class="hamburger__lists">
      <li class="hamburger__list">
        <a class="hamburger__link little" href="#top">TOP</a>
      </li>
      <li class="hamburger__list">
        <a class="hamburger__link" href="#news">NEWS</a>
      </li>
      <li class="hamburger__list">
        <a class="hamburger__link" href="#story">STORY</a>
      </li>
      <li class="hamburger__list">
        <a class="hamburger__link" href="#comments">COMMENTS</a>
      </li>
      <li class="hamburger__list">
        <a class="hamburger__link little2" href="#cast">CAST</a>
      </li>
      <li class="hamburger__list">
        <a class="hamburger__link" href="#inquiry">INQUIRY</a>
      </li>
    </ul>
  </nav>

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

  <div class="inner">
    <div class="breadcrumb">
      <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" href="../html/index.html" class="home"><span property="name">ホーム&nbsp;</span></a>
        <meta property="position" content="1" />
      </span>
      <i class="fas fa-angle-right"></i>
      <span class="current-item">&nbsp;news&nbsp;</span>
    </div>
  </div><!-- /.inner -->

  <section class="archive-news ">
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

  <div class="news-pagination">
    <span class="news-pagination-1">1</span><!-- /.news-pagination-1 -->
    <span class="news-pagination-2">2</span><!-- /.news-pagination-1 -->
    <span class="news-pagination-next">&gt;</span><!-- /.news-pagination-1 -->

  </div><!-- /.pagination -->

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
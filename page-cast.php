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

<main>
  <div class="inner">
    <div class="breadcrumb">
      <?php bcn_display(); ?>
    </div>
  </div>
  <!--inner-->

  <section id="cast" class="cast page-cast-top">
    <div class="inner cast-inner">
      <h2 class="section-title cast-title">CAST</h2><!-- /.section-title -->
      <ul class="cast-items row">
        <?php if (have_posts()) :  ?>
          <?php while (have_posts()) :  the_post();  ?>
            <?php $casts = SCF::get('cast1'); ?>
            <?php foreach ($casts as $cast) : ?>
              <?php $image = wp_get_attachment_image_src($cast['image'], 'large');  ?>
              <li class="cast-item col-md-4">
                <img src="<?php echo $image[0]; ?>" alt="">
                <p class="human"><span class="human1"><?php echo $cast['post']; ?></span><br><span class="human2"><?php echo $cast['name']; ?></span><br>
                  <span class="human3"><?php echo $cast['job_category']; ?></span></p>
                <!-- /.human -->
                <p class="cast-item-text"><?php echo $cast['text']; ?></p><!-- /.cast-item-text -->
              </li><!-- /.cast-item -->
            <?php endforeach; ?>
          <?php endwhile;  ?>
        <?php endif;  ?>

      </ul><!-- /.cast-items -->

    </div><!-- /.inner -->
  </section><!-- /.cast -->

  <div class="page-cast-center">
    <div class="inner page-cast-center-inner">
      <div class="page-cast-center-items">

        <?php if (have_posts()) :  ?>
          <?php while (have_posts()) :  the_post();  ?>
            <?php $casts2 = SCF::get('cast2'); ?>
            <?php foreach ($casts2 as $cast2) : ?>
              <?php $image2 = wp_get_attachment_image_src($cast2['image2'], 'large'); ?>
              <div class="page-cast-item">
                <div class="page-cast-img-wrap">
                  <img src="<?php echo $image2[0]; ?>" alt="" class="page-cast-img">
                </div><!-- /.page-cast-img-wrap -->
                <div class="page-cast-item-body">
                  <p class="page-cast-head human1"><?php echo $cast2['post2']; ?><br><span class="page-cast-name"><?php echo $cast2['name2']; ?></span> <br><span class="human3"><?php echo $cast2['job_category2']; ?></span></p><br><!-- /.page-cast-head -->
                  <p class="page-cast-text human3"><?php echo $cast2['text2']; ?></p><!-- /.page-cast-text -->
                </div><!-- /.page-cast-item-body -->
              </div><!-- /.page-cast-item -->
            <?php endforeach; ?>
          <?php endwhile;  ?>
        <?php endif;  ?>


      </div><!-- /.page-cast-items -->
    </div><!-- /.inner page-cast-inner -->
  </div><!-- /.page-cast-center -->

  <section class="page-cast-bottom">
    <div class="inner page-cast-bottom-inner">
      <ul class="page-cast-bottom-items">
        <?php if (have_posts()) :  ?>
          <?php while (have_posts()) :  the_post();  ?>
            <?php $casts3 = SCF::get('cast3'); ?>
            <?php foreach ($casts3 as $cast3) : ?>
              <li class="page-cast-item-bottom human1"><?php echo $cast3['post3']; ?><br> <span class="human4"><?php echo $cast3['name3']; ?></span><br> <span class="human3"><?php echo $cast3['job_category3']; ?></span></li><!-- /.page-cast-item -->
            <?php endforeach; ?>
          <?php endwhile;  ?>
        <?php endif;  ?>
        
      </ul><!-- /.page-cast-bottom-items -->
    </div><!-- /.inner page-cast-bottom-inner -->
  </section><!-- /.page-cast-bottom -->







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
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
      <a href="<?php $page_id = get_page_by_path('inquiry');
                echo esc_url(get_permalink($page_id)); ?>" class="btn-red mainvisual-common-btn-red">チケット予約サイトへ</a><!-- /.btn-red -->
    </div><!-- /.top-btn -->
  </div><!-- /.inner news-archive-inner -->
</section>

<main>
  <div class="inner">
    <div class="breadcrumb">
      <?php bcn_display(); ?>
    </div>
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
          <?php the_time('Y.m.j');  ?>
          <p><?php the_title(); ?></p>
        </div><!-- /.middle-text -->
        <div class="bottom-text">
          <p><?php the_content(); ?></p>
        </div><!-- /.bottom-text -->
      </div><!-- /.news-single-item -->
    </div><!-- /.inner news-single-inner -->
  </section>

  <div class="news-single-pagination">
    <div class="inner pagination-inner">

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
  </div><!-- /.inner -->

  <?php get_template_part('template-parts/parts-schedule'); ?>

  <?php get_footer();  ?>
  </body>

  </html>
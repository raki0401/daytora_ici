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
        <p class="confilm-text wow fadeInUp">お問い合わせありがとうございました。 <br>メッセージは正常に送信されました。</p><!-- /.confilm-text -->
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
        <?php if ($news_query->have_posts()) :  ?>
          <?php while ($news_query->have_posts()) :  $news_query->the_post();  ?>

            <a href="<?php the_permalink(); ?>" class="news-item wow fadeInUp" data-wow-delay="0.3s">
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

  <?php get_template_part('template-parts/parts-schedule'); ?>

  <?php get_footer(); ?>
  </body>

  </html>
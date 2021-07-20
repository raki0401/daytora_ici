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
              <h4><?php if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                        $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                        echo $title . '……';
                      } else {
                        echo $post->post_title;
                      }
                      ?></h4>
            </div><!-- /.archive-news-item-bottom -->
          </a><!-- /.archive-archive-news-item -->

        <?php endwhile;  ?>
      <?php endif;  ?>

    </div>
  </div>
</section>

<?php if (paginate_links()) : ?>
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

<?php get_template_part('template-parts/parts-schedule'); ?>

<?php get_footer();  ?>
</body>

</html>
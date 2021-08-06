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

  <section class="news-single">
    <div class="inner news-single-inner">
      <div class="section-title news-single-title">NEWS</div><!-- /.section-title -->
      <div class="news-single-item wow fadeInUp" data-wow-delay="0.2s">
        <!-- <div class="news-single-img-wrap"> -->
        <div class="news-single-img">
          <?php the_post_thumbnail(); ?>

        </div><!-- /.new-single-img -->

        <div class="middle-text">
          <time datetime="2019-9-30"><?php echo get_the_modified_time('Y.m.j');  ?></time>
          
          <p><?php the_title(); ?></p>
        </div><!-- /.middle-text -->
        <div class="bottom-text">
          <?php the_content(); ?>
        </div><!-- /.bottom-text -->
      </div><!-- /.news-single-item -->
    </div><!-- /.inner news-single-inner -->
  </section>

  
  <div class="news-single-pagination">
    <div class="inner pagination-inner">
    <?php if ($next_post = get_next_post()):?>
      <a class="pagination-left"  href="<?php echo get_the_permalink($next_post->ID); ?>">
        <time datetime="<?php  get_the_date('Y.n.j',$next_post->ID); ?>"><?php echo get_the_modified_date('Y.n.j',$next_post->ID); ?></time>
        <p class="pagination-text"> <?php echo get_the_title($next_post->ID); ?></p><!-- /.pagination-text -->
      </a><!-- /.pagination-left -->
      <?php endif; ?>

      <?php if ($prev_post = get_previous_post()):?>
      <a class="pagination-right" href="<?php print get_the_permalink($prev_post->ID); ?>">
        <div class="time-wrap">
          <time datetime="<?php  get_the_date('Y.n.j',$prev_post->ID); ?>"><?php echo get_the_modified_date('Y.n.j',$prev_post->ID); ?></time>
        </div><!-- /.time-wrap -->
        <p class="pagination-text pagination-text-right"><?php echo get_the_title($prev_post->ID); ?></p><!-- /.pagination-text -->
      </a><!-- /.pagination-left -->
      <?php endif; ?>
    </div><!-- /.news-single-pagination -->
  </div><!-- /.inner -->

  <?php get_template_part('template-parts/parts-schedule'); ?>

  <?php get_footer();  ?>
  </body>

  </html>
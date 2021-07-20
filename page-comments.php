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

    <section id="comments" class="comments page-comments">
      <div class="inner">
        <h2 class="section-title comments-title">COMMENTS</h2><!-- /.section-title -->
        <p class="comments-text">舞台関係者のみならず各界著名人からコメントが届いています！</p><!-- /.comments-text -->
        <div class="comments-content">
          <div class="comments-human-title">京都佛立ミュージアム館長<span><br class="sp-only"> 長松清潤</span></div>
          <!-- /.comments-text-title -->
          <div class="comments-human-text">
            「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。
          </div><!-- /.comments-text -->

        </div><!-- /.comments-content -->
      </div><!-- /.inner -->
    </section><!-- /.comments -->

    <section class="comments-contents">
      <div class="inner">

        <div class="comments-items">
  
          <?php if (have_posts()) :  ?>
            <?php while (have_posts()) :  the_post();  ?>
              <?php $comments = SCF::get('good-comments');   ?>
              <?php foreach ($comments as $comment) : ?>
                <div class="comments-item">
                  <div class="comments-name"><?php echo $comment['name']; ?></div><!-- /.comments-item-title -->
                  <p class="comments-subname"><?php echo $comment['jobs']; ?></p><!-- /.comments-item-subname -->
                  <p class="comments-item-text"><?php echo $comment['comments-text']; ?></p><!-- /.comments-text -->
                </div><!-- /.comments-item -->
              <?php endforeach; ?>
            <?php endwhile;  ?>
          <?php endif;  ?>
  
  
        </div><!-- /.comments-items -->
      </div><!-- /.inner -->
    </section><!-- /.page-comments-body -->

    <?php get_template_part('template-parts/parts-schedule'); ?>

    <?php get_footer(); ?>
    </body>

    </html>
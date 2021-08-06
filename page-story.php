<?php get_header(); ?>



<section id="mainvisual-common" class="mainvisual-common story-mainvisual">
  <div class="inner">
    <div class="mainvisual-common-imgs story-top-img">
      <div class="mainvisual-text1">
        <img class="mainvisual-text-left" src="<?php echo  get_template_directory_uri(); ?>/img/top_text@2x.png" alt="">
      </div><!-- /.mainvisual-text1 -->
      <div class="mainvisual-text2">
        <img class="mainvisual-text-right" src="<?php echo get_template_directory_uri(); ?>/img/top_text_left@2x.png" alt="">
      </div><!-- /.mainvisual-text2 -->
    </div><!-- /.news-archive-imgs -->
    <div class=" story-page-btn-wrap">
      <a href="#" class="story-page-btn">チケット予約サイトへ</a><!-- /.btn-red -->
    </div><!-- /.top-btn -->


    <div class="breadcrumb story-breadcrumb">
      <?php bcn_display(); ?>
    </div>
    <h2 class="section-title story-title">STORY</h2><!-- /.section-title -->
    <div class="story-body-wrap">
      <p class=" story-body-text  wow fadeInUp" data-wow-delay="0.3s">
        マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
        世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
      </p><!-- /.story-body-text -->
    </div><!-- /.story-body-title -->
  </div><!-- /.inner -->
</section><!-- mainvisual-common -->





<?php if (have_posts()) :  ?>
  <?php while (have_posts()) :  the_post(); ?>

    <?php $storys = SCF::get('story-contents'); ?>
    <?php foreach ($storys as $story) : ?>
      <?php $img_url = wp_get_attachment_image_src($story['story-image'], 'large')[0]; ?>
      <div class="story-contents contents-a" style="background-image:url(<?php echo $img_url; ?>);">
        <div class="inner">
          <div class="story-body-wrap wrap-left">
            <p class="story-body-text wow fadeInUp" data-wow-delay="0.3s">
              <?php echo $story['story-text']; ?>
            </p><!-- /.story-body-text -->
          </div><!-- /.story-body-wrap -->
        </div><!-- /.inner -->
      </div><!-- /.story-contents -->
    <?php endforeach; ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_template_part('template-parts/parts-schedule'); ?>

<?php get_footer(); ?>
</body>

</html>
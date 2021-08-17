<?php get_header(); ?>

<section id="mainvisual-common" class="mainvisual-common">
  <div class="inner">
    <div class="mainvisual-common-imgs">
      <div class="mainvisual-text1 ">
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

<!-- content -->
<div id="content" class="m_one m_404">
  <div class="inner">

    <!-- primary -->
    <main id="primary">

      <!-- entry -->
      <div class="entry-404">
        <h1 class="entry-404-head"><span>404</span>Not Found</h1><!-- /entry-404-head -->
        <div class="entry-404-lead">お探しのページが<br class="m_sp" />見つかりませんでした</div><!-- /entry-404-head -->
        <p class="entry-404-content">申し訳ありませんが、お探しのページが存在しないか、アクセスできません。<br>入力されたURLが正しいかご確認ください。</p>
        <!-- /entry-404-content -->
        <div class="entry-404-btn"><a class="btn" href="<?php echo home_url(); ?>">トップページに戻る</a></div><!-- /entry-404-btn -->
      </div><!-- /entry-404 -->

    </main><!-- /primary -->

  </div><!-- /inner -->
</div><!-- /content -->

<?php echo get_template_part('template-parts/parts-schedule'); ?>

<?php get_footer(); ?>
<?php get_header(); ?>


<section id="top" class="top ">
  <div class="top-inner">
    <h1 class="main-title"><img src="<?php echo get_template_directory_uri(); ?>/img/top_text@2x.png"></h1><!-- /.main-title -->
    <div class="top-text-wrap">
      <h3 class="top-text-left"><img src="<?php echo get_template_directory_uri(); ?>/img/top_text_left@2x.png"></h3><!-- /.top-text-left -->
      <div class="top-text-right">
        <p>
          小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！
          <br>
          アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
        </p>
      </div><!-- /.top-text-right -->
    </div><!-- /.top-text-wrap -->
    <div class="top-btn">
      <a href="#" class="btn-red top-btn-red">チケット予約サイトへ</a><!-- /.btn-red -->
    </div><!-- /.top-btn -->
  </div><!-- /.top-inner -->
</section><!-- /.top -->

<section class="introduction">
  <div class="inner intro-inner">
    <h2 class="section-title introduction-title">INTRODUCTION</h2><!-- /.introduvtion-title -->
    <div class="introduction-sub-title">なぜ今「マハーバーラタ」なのか？</div><!-- /.introduction-sub-title -->
    <div class="introduction-text-wrap container">
      <div class="row">
        <div class="introduction-text-left col-md">
          「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
          それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。
          平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</div><!-- /.introduction-text-left -->
        <div class="introduction-text-right col-md">
          現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
          神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
          非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</div><!-- /.introduction-text-right -->
      </div><!-- /.row -->
    </div><!-- /.introduction-text-wrap -->
  </div><!-- /.inner -->
</section><!-- /.INTRODUCTION -->

<section id="news" class="news ">
  <div class="inner news-inner">
    <h2 class="section-title news-title">NEWS</h2><!-- /.section-title -->
    <div class="news-items ">
      <?php if (have_posts()) :  ?>
        <?php while (have_posts()) :  the_post();  ?>

          <a href="<?php the_permalink(); ?>" class="news-item ">
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
              <time><?php echo get_the_time('Y.m.j'); ?></time>
              <h4> <?php
                        if (mb_strlen(get_the_title(), 'UTF-8') > 30) {
                          $title = mb_substr(get_the_title(), 0, 30, 'UTF-8');
                          echo $title . '……';
                        } else {
                          echo get_the_title();
                        }
                        ?></h4>
            </div><!-- /.news-item-bottom -->
          </a><!-- /.news-item -->

        <?php endwhile;  ?>
      <?php endif;  ?>

    </div><!-- /.news-items -->
    <div class="news-btn">

      <a href="<?php $category_id = get_cat_ID('news');
                echo esc_url(get_category_link($category_id)); ?>" class="btn-red news-btn-red">ニュース一覧へ</a>
    </div><!-- /.news-btn -->
  </div><!-- /.inner -->
</section><!-- /.news -->

<section id="story" class="story">
  <div class="inner">
    <h2 class="section-title story-title">STORY</h2><!-- /.section-title -->
    <div class="story-text row">
      <p class="col-md-6">
        マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。
        世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
        <!-- インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。
          日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない。 -->
      </p>
    </div><!-- /.story-text -->
    <div class="story-btn">
      <a href="<?php get_template_directory_uri(); ?>/story" class="btn-red story-btn-red">もっと詳しく</a><!-- /.btn-red -->
    </div><!-- /.story-btn -->
  </div><!-- /.inner -->
</section><!-- /.story -->

<section id="comments" class="comments">
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
      <div class="comments-btn">
        <a href="<?php get_template_directory_uri(); ?>/comments" class="btn-red comments-btn-red">もっと見る</a><!-- /.btn-red -->
      </div><!-- /.comments-btn -->
    </div><!-- /.comments-content -->
  </div><!-- /.inner -->
</section><!-- /.comments -->

<section id="cast" class="cast">
  <div class="inner cast-inner">
    <h2 class="section-title cast-title">CAST</h2><!-- /.section-title -->
    <ul class="cast-items row">
      <li class="cast-item col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Layer 1@2x.jpg" alt="">
        <p class="human"><span class="human1">作・演出・振付・構成 </span><br><span class="human2">小池博史</span></p>
        <!-- /.human -->
        <p class="cast-item-text">茨城県日立市出身。一橋大学卒業。 演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。 1982年「パパ・タラフマラ」設立。
          a href="#"演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りink空間を築き上げてゆく手法で、国際的に高い評価を確立。
          3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。
          著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p><!-- /.cast-item-text -->
      </li><!-- /.cast-item -->
      <li class="cast-item col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Layer 0@2x.jpg" alt="">
        <p class="human"><span class="human1">出演</span> <br><span class="human2">白井さち子 </span><br><span class="human3">(バレエ、コンテンポラリーダンス)</span></p><!-- /.human -->
        <p class="cast-item-text">7歳よりクラシックバレエを始める。 82年より6年間橘バレエ学校に在籍。 牧阿佐美に師事。 日本女子体育短期大学舞踊コース卒。 在籍中、太田順造にパントマイムを師事。
          a href="#"89年よりパパ・タラフマラに参加。 以降国内外の公演にink 後身のパフォーマーのダンス指導にもあっている。
          パパ・タラフマラ作品「シンデレラ」においてシンデレラ役、「三人姉妹」次女役、「パパ・タラフマラの白雪姫」継母役などを好演。
          これまで約35カ国での公演に参加、そのパフォーマンスは世界各地で認められ、高く評価されている。</p><!-- /.cast-item-text -->
      </li><!-- /.cast-item -->
      <li class="cast-item col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Layer 3@2x.jpg" alt="">
        <p class="human"><span class="human1">出演</span> <br><span class="human2">小谷野哲郎 </span><br><span class="human3">(バリ舞踏)</span></p><!-- /.human -->
        <p class="cast-item-text">東海大学音楽学課程在学中よりサウンドスケープ研究の傍らバリ舞踊を始める。 1995年よりインドネシア政府給費留学生としてインドネシア国立芸術高等学院に留学。
          a href="#"学外でも現代バリ舞踊界最高の舞踊家達に師事し、舞踊技術inkに精神的哲学的影響も強く受ける。 2006年、Asian Cultural Councilの助成によりアメリカに滞在。
          パパ・タラフマラ作品では「ガリバー＆スウィフト」「パンク・ドンキホーテ」「白雪姫」に、小池博史ブリッジプロジェクトでは「注文の多い料理店」「風の又三郎」に出演。</p>
        <!-- /.cast-item-text -->
      </li><!-- /.cast-item -->
    </ul><!-- /.cast-items -->
    <div class="cast-btn">
      <a href="<?php get_template_directory_uri(); ?>/comments" class="btn-red cast-btn-red">もっと見る</a><!-- /.btn-red -->
    </div><!-- /.cast-btn -->
  </div><!-- /.inner -->
</section><!-- /.cast -->

<?php get_template_part('template-parts/parts-schedule'); ?>

<?php get_footer();  ?>
</body>

</html>
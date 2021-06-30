<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="デイトラ卒業制作">
<link rel="stylesheet" href="https://use.fontawesome.com/releases\v5.6.3/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/style.css"> -->
<title>卒業制作toppage</title>
<?php wp_head();  ?>
</head>

<body <?php body_class( ); ?>>
  <header id="header">
    <div class="nav-wrap">
     
      <nav class="header-nav">
        <ul class="header-list">
          <li><a href="" class="header-nav-top little">TOP</a></li>
          <li><a href="<?php echo esc_url(news_url()); ?>/" class="header-nav-news">NEWS</a></li>
          <li><a href="<?php echo esc_url(story_url()); ?>/" class="header-nav-story">STORY</a></li>
          <li><a href="<?php echo esc_url(comments_url()); ?>/">COMMENTS</a></li>
          <li><a href="<?php echo esc_url(cast_url()); ?>/">CAST</a></li>
          <li><a href="<?php echo esc_url(inquiry_url()); ?>/">INQUIRY</a></li>
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
      <?php
      //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
      wp_nav_menu(
        array(
          'depth' => 1,
          'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
          'container' => 'ul',
          'container_class' => 'hamburger__lists',
          'menu_class' => 'hamburger__list',
          )
        );
        ?>
        <!--<li class="hamburger__list">
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
      </li> -->
    </ul>
  </nav>
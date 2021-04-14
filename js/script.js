
// ここからハンバーガーメニュー
$(".hamburger-btn").click(function () {
  $(".hamburger").toggleClass("is-checker");
  $(".hamburger-back").toggleClass("is-checker");
  $(".hamburger-btn").toggleClass("is-checker");
  return false;
});


$(function () {
  $('a[href^="#"]').click(function () {
    let speed = 800;
    let id = $(this).attr("href");
    let target = $("#" == id ? "html" : id);
    let position = $(target).offset().top;
    if ($(this).hasClass("little2")) {   //htmlの目的のタグにa-littleとクラス名をつける
      position -=200 ;
    }
    if ($(this).hasClass("little")) {
      position -= 90;
    }
    $("html, body").animate({ scrollTop: position }, speed);
    return false;
  });
});

$(function(){ 
  let pagetop = $('#page-top'); 
  pagetop.hide(); 
  $(window).on("scroll", function(){ 
    if($(this).scrollTop() > 500){ 
      $('#page-top').fadeIn(); 
    }else{ 
      $('#page-top').fadeOut(); 
    } 
  }); 
}); 
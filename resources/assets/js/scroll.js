$(function () {
  $('nav a[href^="#"]').click(function() {
    var speed = 1500;
    var href = $(this).attr('href');
    var target = $(href == '#' || href == '' ? 'html' : href);
    var position = target.offset().top;
    $('body, html').animate({scrollTop: position}, speed, 'swing');
    return false;
  });

  var navbar = $('.navbar');
  $(window).scroll(function() {
    if ($(window).scrollTop() >= 200) {
      navbar.fadeIn(1000);
    } else if ($(window).scrollTop() == 0) {
      navbar.fadeOut();
    }
  });
});
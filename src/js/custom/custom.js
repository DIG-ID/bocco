$(function() {
  $('.navbar-toggler').on( 'click', function() {
     $('.main-header').toggleClass('is-open');
     $('body').toggleClass('is-open');
  });
  $('.section-banner__btn').on( 'click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top + -200
  }, 300);
  });
  //Back to top button
  var btnBtt = $('#button-btt');
  $(window).on( 'scroll', function() {
    if ($(window).scrollTop() > 300) {
      btnBtt.addClass('show');
    } else {
      btnBtt.removeClass('show');
    }
  });
  btnBtt.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
});
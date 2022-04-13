$(function() {
  $('.navbar-toggler').on( 'click', function() {
     $('.main-header').toggleClass('is-open');
     $('body').toggleClass('is-open');
  });
  $('.section-banner__btn').on( 'click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top + -160
  }, 300);
  });
});
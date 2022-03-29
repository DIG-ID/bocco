$(function() {
  $('.navbar-toggler').on( 'click', function() {
     $('.main-header').toggleClass('is-open');
     $('body').toggleClass('is-open');
  });
});
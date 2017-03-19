$(document).ready(function() {

  // Scroll to top button
  // Show after 300px scrolled
  $(window).scroll(function(){
    if ($(this).scrollTop() > 300) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });
  // On click scroll to top with animation
  $('.scroll-to-top').click(function(){
    $('html, body').animate({
        scrollTop : $('body').offset().top
      }, 800);
    return false;
  });
  // End Scroll to top button

});

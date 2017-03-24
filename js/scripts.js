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

  //Stylesheet change
  $('#print').click(function (){
   $('link[href="css/main.css"]').attr('href','css/print.css');
  });
  $('#projector').click(function (){
    var cnt = $(".tab-content").contents();
    $(".tab-content").replaceWith(cnt);
    var cnt = $("#lecture").contents();
    $("#lecture").replaceWith(cnt);
    $('.remove').remove();
    $('link[href="css/main.css"]').attr('href','css/projector.css');
    $('link[href="css/daria-style.css"]').attr('href','css/reveal.min.css');
    $('head').append('<link rel="stylesheet" href="css/reveal-default-theme.css" id="theme">');
    $('head').append('<script src="js/reveal.min.js" type="text/javascript"></script>');
    Reveal.initialize({
    			controls: true,
    			progress: true,
    			history: true,
    			center: true,

    			theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
    			transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/none
     });
  });
  // End Stylesheet change



});

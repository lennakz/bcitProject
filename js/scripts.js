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
    var cnt = $("#summary").contents();
    $("#summary").replaceWith(cnt);
    var cnt = $("#resources").contents();
    $("#resources").replaceWith(cnt);
    var cnt = $("#homework").contents();
    $("#homework").replaceWith(cnt);
    $('.remove').remove();
    $('link[href="css/main.css"]').attr('href','css/reveal.min.css');
    $('link[href="css/daria-style.css"]').attr('href','css/reveal-default-theme.css');
    $('head').append('<script src="js/reveal.min.js" type="text/javascript"></script>');
    if (!$('#go-back').length) {
      $('body').append('<a href="#" class="roll" id="go-back">Back to Lecture</a>');
    };

    Reveal.initialize({
    			controls: true,
    			progress: true,
    			history: true,
    			center: true,

    			transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/none
     });
     $('#go-back').click(function() {
       location.reload();
     });

  });

  // End Stylesheet change



});

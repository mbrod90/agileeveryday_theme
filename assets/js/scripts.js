jQuery( document ).ready( function( $ ) {

  $(document).foundation();

  ///////////////  CLOCK ANIMATE ////////////////////////

  $('.hour, .minute, .second').data('plus-deg', 0);
  calcTime();
  $('#clock').addClass('animate');
  var int = setInterval(calcTime, 1000);
  function calcTime () {
    var d = new Date();
    var h = d.getHours();
    rotate($('.hour'),  ((h > 12 ? h - 12 : h)*30)-90);
    rotate($('.minute'), (d.getMinutes()/*0-59*/*6)-90);
    rotate($('.second'), (d.getSeconds()/*0-59*/*6)-90);
  }
  function rotate ($object, deg) {
    var original_deg = deg;
    if(deg != $object.data('deg')){
      if(deg == -90) {
        $object.data('plus-deg', $object.data('plus-deg')+360);
      }
      deg += $object.data('plus-deg');
      $object.css({
        '-webkit-transform' : 'rotate('+deg+'deg)',
        '-moz-transform' : 'rotate('+deg+'deg)',
        '-ms-transform' : 'rotate('+deg+'deg)',
        '-o-transform' : 'rotate('+deg+'deg)',
        'transform' : 'rotate('+deg+'deg)',
        'zoom' : 1
      });
      $object.data('deg', original_deg);
    }
  }

  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1602791803920752",
    enable_page_level_ads: true
  });

  $( ".nav-toggle" ).click(function() {
    $(this).toggleClass("open");
    $("nav").fadeToggle(100);

    return false;
  });

  setTimeout(function() {
    $(".girl-head").addClass('girl-head-anim');
  },2000);

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100030119-1', 'auto');
  ga('send', 'pageview');

});
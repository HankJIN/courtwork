function startF(){
  $('.menu').css({visibility:"hidden"});
  $('#menu .nav1').css({marginLeft:300});
  $('#menu .nav2').css({marginLeft:300});
  $('#menu .nav3').css({marginLeft:300});
  $('#menu .nav4').css({marginLeft:300});
  $('#menu .nav5').css({marginRight:300});
  $('#menu .nav6').css({marginRight:300});
  $('#menu .nav7').css({marginRight:300});
  $('#menu .nav8').css({marginRight:300});
  $('header').css({visibility:"hidden", opacity:0});
  $('.icons').css({visibility:"hidden", opacity:0});
  $('.ball1').css({visibility:"hidden", marginTop:-1500});
  setTimeout(function () {$('.ball1').css({visibility:"visible"}).stop().animate({marginTop:0},1200,'easeOutBounce'); }, 200);
  setTimeout(function () {$('header').css({visibility:"visible"}).stop().animate({opacity:1},1200,'easeOutExpo'); }, 1400);
  setTimeout(function () {$('.icons').css({visibility:"visible"}).stop().animate({opacity:1},1200,'easeOutExpo'); }, 1500);
  setTimeout(function () {
    $('.menu').css({visibility:"visible"});
    $('#menu .nav1').stop().delay(0).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav2').stop().delay(50).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav3').stop().delay(100).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav4').stop().delay(150).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav5').stop().delay(0).animate({marginRight:0},800,'easeInOutExpo');
    $('#menu .nav6').stop().delay(50).animate({marginRight:0},800,'easeInOutExpo');
    $('#menu .nav7').stop().delay(100).animate({marginRight:0},800,'easeInOutExpo');
    $('#menu .nav8').stop().delay(150).animate({marginRight:0},800,'easeInOutExpo');
  }, 1300);
};

function showSplash(){
  setTimeout(function () {
    $('#menu .nav1').stop().delay(0).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav2').stop().delay(50).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav3').stop().delay(100).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav4').stop().delay(150).animate({marginLeft:0},800,'easeInOutExpo');
    $('#menu .nav5').stop().delay(0).animate({marginRight:0},800,'easeInOutExpo');
    $('#menu .nav6').stop().delay(50).animate({marginRight:0},800,'easeInOutExpo');
    $('#menu .nav7').stop().delay(100).animate({marginRight:0},800,'easeInOutExpo');
    $('#menu .nav8').stop().delay(150).animate({marginRight:0},800,'easeInOutExpo');
  }, 200);
};
function hideSplash(){
  $('#menu .nav1').stop().delay(0).animate({marginLeft:300},800,'easeInOutExpo');
  $('#menu .nav2').stop().delay(50).animate({marginLeft:300},800,'easeInOutExpo');
  $('#menu .nav3').stop().delay(100).animate({marginLeft:300},800,'easeInOutExpo');
  $('#menu .nav4').stop().delay(150).animate({marginLeft:300},800,'easeInOutExpo');
  $('#menu .nav5').stop().delay(0).animate({marginRight:300},800,'easeInOutExpo');
  $('#menu .nav6').stop().delay(50).animate({marginRight:300},800,'easeInOutExpo');
  $('#menu .nav7').stop().delay(100).animate({marginRight:300},800,'easeInOutExpo');
  $('#menu .nav8').stop().delay(150).animate({marginRight:300},800,'easeInOutExpo');


};
function hideSplashQ(){
  $('#menu .nav1').css({marginLeft:300});
  $('#menu .nav2').css({marginLeft:300});
  $('#menu .nav3').css({marginLeft:300});
  $('#menu .nav4').css({marginLeft:300});
  $('#menu .nav5').css({marginRight:300});
  $('#menu .nav6').css({marginRight:300});
  $('#menu .nav7').css({marginRight:300});
  $('#menu .nav8').css({marginRight:300});


};

$(document).ready(function() {

  $(window).on('load', function() {
    setTimeout(function () {
      $('.spinner').fadeOut();
      $('body').css({overflow:'inherit'});
      startF();
    }, 200);
    var qwe = setTimeout(function () {$("#jquery_jplayer").jPlayer("play");}, 1000);
  });

  ////// sound control
  $("#jquery_jplayer").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        mp3:"static/assets/files/music.mp3"
      });
      //$(this).jPlayer("play");
      var click = document.ontouchstart === undefined ? 'click' : 'touchstart';
      var kickoff = function () {
        $("#jquery_jplayer").jPlayer("play");
        document.documentElement.removeEventListener(click, kickoff, true);
      };
      document.documentElement.addEventListener(click, kickoff, true);
    },

    repeat: function(event) { // Override the default jPlayer repeat event handler
      $(this).bind($.jPlayer.event.ended + ".jPlayer.jPlayerRepeat", function() {
        $(this).jPlayer("play");
      });
    },
    swfPath: "js",
    cssSelectorAncestor: "#jp_container",
    supplied: "mp3",
    wmode: "window"
  });

  /////// .jp-mute .jp-unmute
  $(".jp-mute, .jp-unmute").css({opacity:0.5});
  $(".jp-mute, .jp-unmute").hover(function() {
    $(this).stop().animate({opacity:1 }, 400, 'easeOutExpo');
  },function(){
    $(this).stop().animate({opacity:0.5 }, 400, 'easeOutExpo' );
  });

  /////// icons
  $(".icons li a").find("img").css({opacity:0.3});
  $(".icons li a").hover(function() {
    $(this).find("img").stop().animate({opacity:1 }, 400, 'easeOutExpo');
    $(this).stop().animate({backgroundColor:"#8a300f" }, 400, 'easeOutExpo');
  },function(){
    $(this).find("img").stop().animate({opacity:0.3 }, 400, 'easeOutExpo');
    $(this).stop().animate({backgroundColor:"#1b0201" }, 400, 'easeOutExpo');
  });

  /////// close
  $(".close .over2").css({opacity:0});
  $(".close").hover(function() {
    $(this).find(".over1").stop().animate({opacity:0 }, 400, 'swing');
    $(this).find(".over2").stop().animate({opacity:1 }, 400, 'easeOutExpo');
  },function(){
    $(this).find(".over1").stop().animate({opacity:1 }, 400, 'easeOutExpo');
    $(this).find(".over2").stop().animate({opacity:0 }, 400, 'swing');
  });



 });  ////////
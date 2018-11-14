$(document).ready(function() {

  $(window).on('load', function() {
    setTimeout(function () {
      $('.spinner').fadeOut();
      $('body').css({overflow:'inherit'});
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
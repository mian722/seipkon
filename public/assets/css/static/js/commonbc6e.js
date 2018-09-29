/**
 * Created by Tommy on 2017/4/11  0011.
 */
(function($) {
  "use strict"; // Start of use strict

  $(window).scroll(function(){
    if($(document).has('.nopadding-top')) {
      if(screen.width < 768){
        $(".ol-navbar").css({"background": "#ffffff", "border-bottom": "1px solid #e7e7e7"});
        return;
      }
      if ($(document).scrollTop() == 0) {
        $(".ol-navbar").css({"background": "none", "border": "none"});
      } else {
        $(".ol-navbar").css({"background": "#ffffff", "border-bottom": "1px solid #e7e7e7"});
      }
    }
  });
  if(screen.width < 768){
    $(".ol-navbar").css({"background": "#ffffff"});
  }

  var type=navigator.appName;
  var lang;
  if (type=="Netscape"){
    lang = navigator.language;
  }else{
    lang = navigator.userLanguage;
  }
//取得浏览器语言的前两个字母
  lang = lang.substr(0,2)
  if (lang == "zh"){
    var html = '&nbsp; | &nbsp;广州逸趣信息科技有限公司 &nbsp; | &nbsp;<a href="http://www.miitbeian.gov.cn">粤ICP备16042571号</a>';
    $(document).find('footer').find('.copyright').append(html);
  }
})(jQuery); // End of use strict

(function($) {
  $.fn.is_smallerScreen = function() {
    var win               = $(window),
      container         = $('html'),
      check_screen      = function() {

        if( win.width() < 1000 ){
          container.addClass('is_smallScreen');
        } else {
          container.removeClass('is_smallScreen');
        }
      };

    win.on("smartresize", check_screen);
    check_screen();
  };
})(jQuery);

(function ($) {
  function getViewportHeight() {
    var height = window.innerHeight; // Safari, Opera
    var mode = document.compatMode;

    if ( (mode || !$.support.boxModel) ) { // IE, Gecko
      height = (mode == 'CSS1Compat') ?
        document.documentElement.clientHeight : // Standards
        document.body.clientHeight; // Quirks
    }

    return height;
  }

  $(window).scroll(function () {
    var vpH = getViewportHeight(),
      scrolltop = (document.documentElement.scrollTop ?
        document.documentElement.scrollTop :
        document.body.scrollTop),
      elems = [];

    // naughty, but this is how it knows which elements to check for
    $.each($.cache, function () {
      if (this.events && this.events.inview) {
        elems.push(this.handle.elem);
      }
    });

    if (elems.length) {
      $(elems).each(function () {
        var $el = $(this),
          top = $el.offset().top,
          height = $el.height(),
          inview = $el.data('inview') || false;

        if (scrolltop > (top + height) || scrolltop + vpH < top) {
          if (inview) {
            $el.data('inview', false);
            $el.trigger('inview', [ false ]);
          }
        } else if (scrolltop < (top + height)) {
          if (!inview) {
            $el.data('inview', true);
            $el.trigger('inview', [ true ]);
          }
        }
      });
    }
  });
})(jQuery);

jQuery(document).ready(function($) {
  // kick the event to pick up any elements already in view.
  // note however, this only works if the plugin is included after the elements are bound to 'inview'
  $(function () {
    $(window).scroll();
  });



  main_functions_call();
  function main_functions_call(container){
    if(typeof container === 'undefined'){
      container = 'body';
    }

    // adding mobile class on smaller screens
    $(container).is_smallerScreen();
  }

  /* ANIMATIONS */

  $('html:not(.is_smallScreen) .fade_in').bind('inview', function (event, visible) {
    if (visible == true) {
      $(this).addClass('animated fadeIn');
    }
  });

  $('html:not(.is_smallScreen) .flip_in').bind('inview', function (event, visible) {
    if (visible == true) {
      $(this).addClass('animated flipInY');
    }
  });

  $('html:not(.is_smallScreen) .bounce_fade').bind('inview', function (event, visible) {
    if (visible == true) {
      $(this).addClass('animated bounceIn');
    }
  });

  $('html:not(.is_smallScreen) .up_fade').bind('inview', function (event, visible) {
    if (visible == true) {
      $(this).addClass('animated fadeInUp');
    }
  });

  $('html:not(.is_smallScreen) .left_fade').bind('inview', function (event, visible) {
    if (visible == true) {
      $(this).addClass('animated fadeInLeft');
    }
  });

  $('html:not(.is_smallScreen) .right_fade').bind('inview', function (event, visible) {
    if (visible == true) {
      $(this).addClass('animated fadeInRight');
    }
  });
});


<!-- Piwik -->
var _paq = _paq || [];
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
  //var u="//piwik.iuniontrack.com:30084/";//dev
  var u="//analytics.offerslook.com/";//prod

  _paq.push(['setTrackerUrl', u+'piwik.php']);
  _paq.push(['setSiteId', 3]);
  var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
  g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
})();
<!-- End Piwik Code -->
window.addEventListener("load", function () {
    window.cookieconsent.initialise({
        palette: {
            popup: {
                background: "#749e40",
                text: "#ffffff"
            },
            button: {
                background: "transparent",
                border: "#ffffff",
                text: "#ffffff"
            },
        },
        theme: "classic",
        content: {
            message: "This website uses cookies to ensure you receive the best experience.",
            allow: "Accept",
            dismiss: "Got it!",
            deny: "Decline",
            link: "Learn more",
            href: "https://www.offerslook.com/cookie-policy.html"
        },
    });
});
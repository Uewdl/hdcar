(function($) {
  //'use strict';

  $(function() {
    var $fullText = $('.admin-fullText');
    $('#admin-fullscreen').on('click', function() {
      $.AMUI.fullscreen.toggle();
    });

    $(document).on($.AMUI.fullscreen.raw.fullscreenchange, function() {
      $fullText.text($.AMUI.fullscreen.isFullscreen ? '退出全屏' : '开启全屏');
    });

    $('.product .cover img').mouseenter(function(){
      $(this).stop().animate({
        opacity:.5
      },200).animate({
        opacity:1
      },500)
    })
    $('.transform-square li').hover(function(){
      $(this).addClass('hover')
    },function(){
      $(this).removeClass('hover')
    })
    //$(document.body).append('<p>'+window.screen.availWidth+'</p>')
    var screenWidth = window.screen.availWidth
    if(screenWidth < 641){
      // var scrollw = window.screen.availWidth;
      //  var tfsquare = $('.transform-square')
      // // tfsquare.append(tfsquare.find('li').removeClass('fall')).addClass('scroll')
      // tfsquare.addClass('scroll').find('li').removeClass('fall')
      var pt = $('.product-tab')
      var pt_item = pt.find('.tab-item')
      pt_item.width(screenWidth / 2)
      pt.removeClass('am-avg-sm-2');
      var pt_width = pt_item.width() * pt.find('.tab-item').length
      pt.width(pt_width)

      var transform = $('.transform-square')
      var tf_item = transform.find('.square-item')
      tf_item.removeClass('am-u-sm-6 am-u-lg-2')
      //tf_item.width(screenWidth / 2)
      tf_item.find('.cover,li').width(screenWidth / 2)
      var tf_width = tf_item.length * tf_item.outerWidth()
      transform.width(tf_width)
      
       $('.am-dropdown').click(function(){            
            $(this).dropdown('toggle')
        })
    }else{
        $('.am-dropdown').hover(function(event){
            $('.am-dropdown').dropdown('close')
            $(this).dropdown('toggle')      
        },function(){
          $(this).dropdown('toggle')
        })
    }

    

    $('.gallery').height($(window).height() - $('header').outerHeight())
  });
})(jQuery);

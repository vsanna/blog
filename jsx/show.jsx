(function(){
  autosize(document.querySelectorAll('textarea'));

  $('.bigbox').css('height',  $(window).height()*(2/3));
  $('.overall').css('height', $(window).height()*(2/3));

  // scrollした時に徐々に画像を暗くして(overallをfadein)メニューバーに変更
  var initialHeight = $(window).height();

  $('.mdl-layout__content').scroll(function(){
    if($(window).width() >= 450){
      var scroll = $('.mdl-layout__content').scrollTop();
      var rate = (initialHeight - scroll)/initialHeight + 0.1;
      if ( rate <= 0 ){return;}
      $('.bigbox').css("opacity",rate);
      if (scroll > (initialHeight * 2 / 3)){
        $('.mdl-layout__header.custom').stop().animate({'left':0}, 300, 'swing');
      } else {
        $('.mdl-layout__header.custom').stop().animate({'left':'-80px'}, 300, 'swing');
        $('.menu-container-bottom').removeClass('show');
      }
    } else {
      var scroll = $('.mdl-layout__content').scrollTop();
      if (scroll > (initialHeight * 2 / 3)){
        $('.mdl-layout__header.custom').stop().animate({'left':0}, 300, 'swing');
      } else {
        $('.mdl-layout__header.custom').stop().animate({'left':'-80px'}, 300, 'swing');
      }
    }
  })

  $('.show-comments').on('click',()=>{
    $(".comments_area").slideToggle(300);
    if($('.show-comments').is('.open')){
      $('.show-comments').removeClass('open')
    }else{
      $('.show-comments').addClass('open')
    }
  })

})()

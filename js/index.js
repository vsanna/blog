'use strict';

(function () {
  // load時の画面サイズ一杯でbigboxを表示させる
  $('.bigbox').css('height', $(window).height());
  $('.overall').css('height', $(window).height());

  // overallが消える -> bigboxの内容を表示 -> loadedを付与して枠線のanimation
  // ->文字を入力する演出(.on-editの付与 -> 文字入力 -> on-editの除去)
  $('.overall').fadeOut(700, function () {
    $('.bigbox-inner').fadeIn(700, function () {
      $('.bigbox .box').addClass('loaded'); // 枠線表示0.6s

      var baseTime = 600; // 枠線表示にかかる時間
      var project_text = [["", baseTime + 300], ["<", 0], [" ", 300], ["P", 400], ["r", 200], ["o", 300], ["j", 200], ["e", 200], ["c", 400], ["t", 200], // 区切れ目
      [" ", 300 + 600], // ちょっと空ける
      ["N", 400], ["a", 200], ["m", 400], ["e", 200], ["/", 400], [">", 400]];

      var after_project_text = [];
      var projectTextTyping = function projectTextTyping(index) {
        if (index == project_text.length) {
          return;
        }
        var text = project_text[index][0];
        var interval = project_text[index][1];
        setTimeout(function () {
          writeInOrFinish(index);
          projectTextTyping(index + 1);
        }, interval);
      };

      var boundryIndex = 9;
      var writeInOrFinish = function writeInOrFinish(index) {
        after_project_text.push(project_text[index][0]);

        if (index == 0) {
          $('#bigbox-title .project').addClass('on-edit');
        } else if (index > 0 && index <= boundryIndex) {
          $('#bigbox-title .project').text(after_project_text.join(""));
          if (index == boundryIndex) {
            after_project_text = [];
            setTimeout(function () {
              $('#bigbox-title .project').removeClass('on-edit');
            }, 300);
            setTimeout(function () {
              $('#bigbox-title .name').addClass('on-edit');
            }, 600); // 若干enterまでに余韻にひたる
          }
        } else if (index > boundryIndex) {
            $('#bigbox-title .name').text(after_project_text.join(""));
            if (index == project_text.length - 1) {
              setTimeout(function () {
                $('#bigbox-title .name').removeClass('on-edit');
              }, 600); // 若干enterまでに余韻にひたる
              return;
            }
          }
      };

      projectTextTyping(0);
    });
  });
  // できれば画像とfontをロードし終わった時にアニメーションをカイスするようなイベントを撮りたい
  // scrollした時に徐々に画像を暗くして(overallをfadein)メニューバーに変更
  $('.mdl-layout__content').scroll(function () {
    if ($(window).width() >= 450) {
      var initialHeight = $(window).height();
      var scroll = $('.mdl-layout__content').scrollTop();
      var rate = (initialHeight - scroll) / initialHeight;
      if (rate <= 0) {
        return;
      }
      // $('.bigbox').css("opacity",rate);
      if (scroll > initialHeight * 2 / 3) {
        $('.mdl-layout__header, .mdl-layout__drawer, .mdl-layout__drawer-button').stop().animate({ 'top': 0 }, 300, 'swing');
      } else {
        $('.mdl-layout__header, .mdl-layout__drawer, .mdl-layout__drawer-button').stop().animate({ 'top': '-64px' }, 300, 'swing');
        $('.menu-container-bottom').removeClass('show');
      }
    } else {
      var initialHeight = $('.bigbox-mobile').height();
      var scroll = $('.mdl-layout__content').scrollTop();
      if (scroll > initialHeight * 2 / 3) {
        $('.mdl-layout__header-row').stop().animate({ 'top': 0 }, 300, 'swing');
        $('.mdl-layout__header.custom').stop().animate({ 'left': 0 }, 300, 'swing');
      } else {
        $('.mdl-layout__header-row').stop().animate({ 'top': '-64px' }, 300, 'swing');
        $('.mdl-layout__header.custom').stop().animate({ 'left': '-80px' }, 300, 'swing');
      }
    }
  });

  $(window).on('resize', function () {
    if ($(window).width() >= 450) {
      $('.mdl-layout__header, .mdl-layout__drawer, .mdl-layout__drawer-button').stop().animate({ 'top': 0 }, 300, 'swing');
    } else {
      $('.mdl-layout__header-row').stop().animate({ 'top': 0 }, 300);
    }
  });

  $('.js-toggle-menu-container-bottom').on('click', function () {
    $('.menu-container-bottom').toggleClass('show');
    $('.toggle-menu-container-bottom').toggleClass('opened');
  });

  $('#bigbox-title').on('click', function () {
    var posts_top = $('#posts').offset().top + $('.mdl-layout__content').scrollTop() - 60;
    $('.mdl-layout__content').animate({
      scrollTop: posts_top
    });
  });
})();
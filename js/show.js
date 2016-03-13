'use strict';

(function () {
  autosize(document.querySelectorAll('textarea'));

  $('.bigbox').css('height', $(window).height() * (2 / 3));
  $('.overall').css('height', $(window).height() * (2 / 3));

  // scrollした時に徐々に画像を暗くして(overallをfadein)メニューバーに変更
  var initialHeight = $(window).height();

  $('.mdl-layout__content').scroll(function () {
    if ($(window).width() >= 450) {
      var scroll = $('.mdl-layout__content').scrollTop();
      var rate = (initialHeight - scroll) / initialHeight + 0.1;
      if (rate <= 0) {
        return;
      }
      // $('.bigbox').css("opacity",rate);
      if (scroll > initialHeight * 2 / 3) {
        $('.mdl-layout__header.custom').stop().animate({ 'left': 0 }, 300, 'swing');
      } else {
        $('.mdl-layout__header.custom').stop().animate({ 'left': '-80px' }, 300, 'swing');
        $('.menu-container-bottom').removeClass('show');
      }
    } else {
      var scroll = $('.mdl-layout__content').scrollTop();
      if (scroll > initialHeight * 2 / 3) {
        $('.mdl-layout__header.custom').stop().animate({ 'left': 0 }, 300, 'swing');
      } else {
        $('.mdl-layout__header.custom').stop().animate({ 'left': '-80px' }, 300, 'swing');
      }
    }
  });

  // コメント欄のための仕組み
  var post_id = $('.comment-area').data('postid');
  $('.show-comments').on('click', function () {
    $(".comments_area").slideToggle(300);
    if ($('.show-comments').is('.open')) {
      $('.show-comments').removeClass('open');
    } else {
      $('.show-comments').addClass('open');
    }
  });
  $('.replytocom').on('click', function (e) {
    var clicked_button = $(e.target.parentNode);
    var comment_id = clicked_button.data('replytocom');
    var to_author = clicked_button.data('commentauthor');
    var current_location = location.pathname;
    var new_url = current_location + "?replytocom=" + comment_id;
    $('.form-submit input[type="hidden"][name="comment_parent"]').val(comment_id);
    $('.reply-to-author').show();
    $('.reply-to-author--name').text(to_author);

    if (history) {
      history.replaceState(null, null, new_url);
      var input_height = $('#comment_input').offset().top + $('.mdl-layout__content').scrollTop() - 60;
      $('.mdl-layout__content').animate({
        scrollTop: input_height
      });
    } else {
      location.href = new_url;
      location.reload();
    }
  });
})();
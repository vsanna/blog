<style media="screen">

.comments {
    padding-top: 0;
}

.mdl-list {
    padding: 0;
}

.comments .mdl-list__item-text-body {
    height: auto;
    padding: 4px 0 0 56px;
    line-height: 1.7rem !important;
}

.comments .mdl-list__item--three-line .mdl-list__item-primary-content {
    line-height: inherit;
}

.comments .mdl-list {
    padding: 0 0 0 58px !important;
}
ul.mdl-list.comments {
    overflow: visible;
    /* width: 100%; */
}


span.mdl-list__item-secondary-content {
    position: absolute;
    right: 0;
}

ul.mdl-list.comments.parent {
  margin-right: 40px;
}


.mdl-list__item {
    padding-right: 0;
}

</style>

<div class="article__section clearfix">
  <span class="article__section--title">Comment here!</span>
  <span class="article__section--line"></span>
  <?php if(have_comments()): // コメントがあったら ?>
    <span class="article__section--text show-comments">5件のコメント<i class="material-icons">keyboard_arrow_down</i></span>
    <div class="comments_area">
      <div class="comment-input">
        <form action="#">
          <div class="mdl-textfield mdl-js-textfield">
            <textarea class="mdl-textfield__input" type="text" rows= "3" id="comment_top" ></textarea>
            <label class="mdl-textfield__label" for="comment">コメントを残す...</label>
          </div>
          <label class="mdl-button mdl-js-button mdl-button--icon" for="comment_top">
            <i class="material-icons">send</i>
          </label>
        </form>
        <?php get_template_part('shared/comment_form'); ?>
      </div>
      <ul class="mdl-list comments parent">
        <?php foreach(get_comments() as $c): ?>
          <?php echo show_comments($c, true); ?>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="comment-input">
      <form action="#">
        <div class="mdl-textfield mdl-js-textfield">
          <textarea class="mdl-textfield__input" type="text" rows= "3" id="comment_bottom" ></textarea>
          <label class="mdl-textfield__label" for="comment">コメントを残す...</label>
        </div>
        <label class="mdl-button mdl-js-button mdl-button--icon" for="comment_bottom">
          <i class="material-icons">send</i>
        </label>
      </form>
    </div>
  <?php else: ?>
    <span class="article__section--text">まだコメントががありません</span>
    <div class="comment-input">
      <form action="#">
        <div class="mdl-textfield mdl-js-textfield">
          <textarea class="mdl-textfield__input" type="text" rows= "3" id="comment_bottom" ></textarea>
          <label class="mdl-textfield__label" for="comment">コメントを残す...</label>
        </div>
        <label class="mdl-button mdl-js-button mdl-button--icon" for="comment_bottom">
          <i class="material-icons">send</i>
        </label>
      </form>
    </div>
  <?php endif; ?>
</div>

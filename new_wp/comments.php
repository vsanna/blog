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
    </div>
    <ul class="mdl-list comments">
      <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
          <i class="material-icons mdl-list__item-avatar">person</i>
          <span>Bryan Cranston</span>
          <span class="mdl-list__item-text-body">
            Bryan Cranston played the role of Walter in Breaking Bad. He is also known
            for playing Hal in Malcom in the Middle.
          </span>
        </span>
        <span class="mdl-list__item-secondary-content">
          <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--icon" href="#"><i class="material-icons">reply</i></a>
        </span>
      </li>
      <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
          <i class="material-icons mdl-list__item-avatar">person</i>
          <span>Bryan Cranston</span>
          <span class="mdl-list__item-text-body">
            Bryan Cranston played the role of Walter in Breaking Bad. He is also known
            for playing Hal in Malcom in the Middle.
          </span>
        </span>
        <span class="mdl-list__item-secondary-content">
          <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--icon" href="#"><i class="material-icons">reply</i></a>
        </span>
      </li>
      <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
          <i class="material-icons mdl-list__item-avatar">person</i>
          <span>Bryan Cranston</span>
          <span class="mdl-list__item-text-body">
            Bryan Cranston played the role of Walter in Breaking Bad. He is also known
            for playing Hal in Malcom in the Middle.
          </span>
          <ul class="child child mdl-list">
            <li class="mdl-list__item mdl-list__item--three-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-avatar">person</i>
                <span>Bryan Cranston</span>
                <span class="mdl-list__item-text-body">
                  Bryan Cranston played the role of Walter in Breaking Bad. He is also known
                  for playing Hal in Malcom in the Middle.
                </span>
              </span>
              <span class="mdl-list__item-secondary-content">
                <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--icon" href="#"><i class="material-icons">reply</i></a>
              </span>
            </li>
          </ul>
        </span>
        <span class="mdl-list__item-secondary-content">
          <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-button--icon" href="#"><i class="material-icons">reply</i></a>
        </span>
      </li>
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

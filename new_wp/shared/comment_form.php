<?php
// デフォルト値取得
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$fields = array(
  'author' => '<div class="mdl-textfield mdl-js-textfield input-name"><input class="mdl-textfield__input" type="text" id="name" name="author" tabindex="2"><label class="mdl-textfield__label" for="name">お名前</label></div>',
);

// $comment_field設定
$comment_field = '<div class="reply-to-author"><span class="reply-to-author--name"></span>に返信する</div><div class="mdl-textfield mdl-js-textfield"><textarea class="mdl-textfield__input" name="comment" type="text" rows= "3" id="comment_input" tabindex="1"></textarea><label class="mdl-textfield__label" for="comment">コメントを残す...</label></div>';


// $args設定
$args = array(
    'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field'        => $comment_field,
    'comment_notes_before' => null,
    'comment_notes_after'  => '<button class="mdl-button mdl-js-button mdl-button--icon" type="submit" tabindex="3"><i class="material-icons">send</i></button>',
    'logged_in_as'         => NULL,
    'id_submit'            => null,
    'title_reply'          => null,
    'title_reply_to'       => null,
    'cancel_reply_link'    => null,
    'label_submit'         => null,
);
?>
  <?php comment_form($args); ?>

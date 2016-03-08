<?php
      // デフォルト値取得
      $commenter = wp_get_current_commenter();
      $req = get_option( 'require_name' );
      $aria_req = ( $req ? " aria-required='true'" : '' );


      // $comment_field設定
      $comment_field = '<textarea class="form-control" placeholder="こちらにコメントをご記入ください。"id="comment" name="comment" cols="45" rows="4" aria-required="true"></textarea>';


      // $args設定
      $args = array(
          'comment_field'        => $comment_field,
          'comment_notes_before'     => NULL,
          'comment_notes_after'  => NULL,
          'id_submit'            => 'submit',
          'title_reply'          => __( 'Leave a Reply' ),
          'title_reply_to'       => __( '%s にコメント' ),
          'cancel_reply_link'    => __( 'キャンセル' ),
          'label_submit'         => __( '書き込む' ),
      );
      ?>

  <?php comment_form($args); ?>

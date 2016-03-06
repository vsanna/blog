<!-- comment area -->
<div id="comment-area">
    <div class="comment-list-wrap">
	<?php
	if(have_comments()): // コメントがあったら
	?>

		<h3 id="comments">Comment</h3>

		<ol class="commets-list" >
		<?php wp_list_comments(array('avatar_size'=>48,'style'=>'ul','type'=>'comment')); //コメント一覧を表示 ?>
		</ol>

		<div class="comment-page-link">
				<?php paginate_comments_links(); //コメントが多い場合、ページャーを表示 ?>
		</div>
	<?php
	endif;
        ?>
    </div>
        <hr>
	<?php
        // デフォルト値取得
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        // $fields設定
        $fields = array(
            'author' => '<p id="inputtext">' . '<label for="author">' . __( 'お名前' )
                        . ( $req ? '<span class="required">*</span>' : '' ) . '</label> ' .
                        '<br /><input style="width:50%" class="form-control" id="author" placeholder="例　henry" name="author" type="text" value="'
                        . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
         );


        // $comment_field設定
        $comment_field = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '<span class="required">*</span></label><br /><textarea class="form-control" placeholder="こちらにコメントをご記入ください。"id="comment" name="comment" cols="45" rows="4" aria-required="true"></textarea></p>';

        // $comment_notes_before設定
        $comment_notes_before = NULL;

        // $args設定
        $args = array(
            'fields'        => apply_filters( 'comment_form_default_fields', $fields ),
            'comment_field'        => $comment_field,
            'comment_notes_before'     => $comment_notes_before,
            'comment_notes_after'  => $comment_notes_after,
            'id_submit'            => 'submit',
            'title_reply'          => __( 'Leave a Reply' ),
            'title_reply_to'       => __( '%s にコメント' ),
            'cancel_reply_link'    => __( 'キャンセル' ),
            'label_submit'         => __( '書き込む' ),
        );
        ?>

    <?php comment_form($args); ?>

</div>
<!-- /comment area -->

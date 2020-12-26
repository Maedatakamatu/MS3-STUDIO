<hr class="hrcss" />
<div id="comments">
	<?php
		$args = array(
			'post_id' => $post->ID,
		);
		$comments_query = new WP_Comment_Query();
		$comments = $comments_query->query( $args );
		$comment_count_array = array();
		
		

		foreach($comments as $comment) {
			// メタフィールドから「いいね」数を取得
			//$count = get_comment_meta( $comments->comment_ID, '_commentliked', true );
			
			//$count = intval($count); // 文字列を数値に変換
			$idd = get_comment_ID();
			$count = do_shortcode('[wp_ulike_counter type="comment" id=' . $idd . ' status="like"]');
			
		
			// 「いいね」数順にソートするため、配列にぶっこむ
			$comment_count_array[$comment->comment_ID]['count'] = $count;
			$comment_count_array[$comment->comment_ID]['object'] = $comment;
		}
		
		// 'count'キーで配列をソートする
		foreach($comment_count_array as $key=>$value) {
			$counts[$key] = $value['count'];
		}
		array_multisort((array)$counts, SORT_DESC, $comment_count_array);
		
		// 'count'順にソートした配列からコメントオブジェクトを取り出す
		$comments = array_column($comment_count_array, 'object');

		echo    '<ul class="comments-list">';
		echo    wp_list_comments( array( 'style'=>'ul' ), $comments );
		echo    '</ul>';

    

		$args = array(
			
			'post_id' => $post->ID,
			
			'title_reply' => '投稿フォーム',
			'comment_notes_before' => '',
			'fields' => array(
				'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
				'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
				'email'  => '',
				'url'    => '',
				),
			'label_submit' => __( '投稿する' ),
		);
		comment_form( $args );
		
	?>
</div>
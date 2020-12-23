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
		$count = get_comment_meta( $comment->comment_ID, '_commentliked', true );
		$count = intval($count); // 文字列を数値に変換
	
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
	echo "$count";
	echo "hogehoge";
	echo    '</ul>';

    if ( have_comments() ):
          	?>
			<h5 id="resp"><i class="fa fa-commenting"></i>&nbsp;comment</h5>
			<?php
			
    			echo    '<ul class="comments-list">';
				echo    wp_list_comments( array( 'style'=>'ul' ), $comments );
				echo    '</ul>';
			?>
          <?php
     endif;

     $args = array(
		
		'post_id' => $post->ID,
		
		'title_reply' => 'Message',
		'comment_notes_before' => '',
		'fields' => array(
	    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
            'email'  => '',
            'url'    => '',
            ),
	'label_submit' => __( 'コメントを送信' ),
     );
     comment_form( $args );
     ?>
</div>
<?php
if( $wp_query -> max_num_comment_pages > 1 ):
?>
<div class="st-pagelink">
<?php
$args = array(
'prev_text' => '&laquo; Prev',
'next_text' => 'Next &raquo;',
);
paginate_comments_links($args);
?>
</div>
<?php
endif;
?>
<?php 

// テーマに機能を追加
function sakura_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'sakura_theme_setup' );
 
// styleとscriptを追加
function sakura_theme_scripts() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'pc-style', get_template_directory_uri().'/css/style_pc.css' , array(), false, 'screen and (min-width:769px)' );    
    wp_enqueue_style( 'sp-style', get_template_directory_uri().'/css/style_sp.css' , array(), false, 'screen and (max-width:768px)' );    
	wp_enqueue_script( 'common', get_template_directory_uri() . '/js/common.js');
}
add_action( 'wp_enqueue_scripts', 'sakura_theme_scripts' );

// ACFのオプション設定をちゃんと反映させる（ボックス配置データを削除する）
function clear_meta_box_order(){
    // 通常の投稿ページの編集画面
    delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_post' );
    // 固定ページの編集画面
    delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_page' );
    // 制作実績ページの編集画面
    delete_user_meta( wp_get_current_user()->ID, 'meta-box-order_portfolio' );
}
add_action( 'admin_init', 'clear_meta_box_order' );

//サイドバーを管理画面から編集したい場合
function home_widgets_init() {
    register_sidebar([
        'name'			=> 'Homeサイドバー',
        'id'			=> 'home_sidebar',
        'description'	=> 'home用サイドバーです',
        'before_widget'	=> '<div>',
        'after_widget'	=> '</div>',
        'before_title'	=> '<h2>',
        'after_title'	=> '</h2>',
    ]); 
}
add_action( 'widgets_init', 'home_widgets_init' );


function costom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
      <div id="comment-<?php comment_ID(); ?>">
        <div class="comment-listCon">
          <span class="comment-name">
            <?php printf(__('<cite class="fn">%s</cite> <span class="says">より:</span>'), get_comment_author_link()) ?>
          </span>
          <span class="comment-date-edit">
            <?php comment_date('Y/m/d(D)');?> <?php comment_time();?> <?php edit_comment_link(__('Edit'),'  ','') ?>
          </span>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em><br />
       <?php endif; ?>
       <?php comment_text() ?>
     </div>
   </div>
 <?php
}


 
function move_comment_field( $fields ) {
   $comment_field = $fields['comment'];
   unset( $fields['comment'] );
   $fields['comment'] = $comment_field;
   
   return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );

// 検索対象のテーブルを結合
function my_posts_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
		$join .= "LEFT JOIN $wpdb->postmeta ON $wpdb->posts.ID = $wpdb->postmeta.post_id ";
		$join .= "LEFT JOIN $wpdb->comments ON $wpdb->posts.ID = $wpdb->comments.comment_post_ID ";
	}

    return $join;
}
add_filter('posts_join', 'my_posts_join' );

// 検索条件に追加したテーブルを含める 
function my_posts_where( $where ) {
	global $wpdb;
	
	if ( is_search() ) {
		$where = preg_replace(
			"/\($wpdb->posts.post_title LIKE (\'[^\']+\')\)/",
			"($wpdb->posts.post_title LIKE $1) OR ($wpdb->postmeta.meta_value LIKE $1) OR ($wpdb->comments.comment_content LIKE $1)",
			$where
		);
	}

	return $where;
}
add_filter( 'posts_where', 'my_posts_where' );

// カスタムクエリの重複する投稿データを除外
function my_posts_distinct() {
    if ( is_search() ) {
        return "DISTINCT";
    }
}
add_filter( 'posts_distinct', 'my_posts_distinct' );

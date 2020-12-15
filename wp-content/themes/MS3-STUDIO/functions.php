<?php 

// テーマに機能を追加
function sakura_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'sakura_theme_setup' );

function sakura_theme_init() {
    register_post_type('items',[ //itemsという投稿タイプを追加(英語)
        "labels" => [
            "name" => "商品"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 25,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-cart",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    register_post_type('portfolio',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "制作実績"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 25,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-table-col-before",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
}
add_action( 'init', 'sakura_theme_init' );
 
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
function sakura_widgets_init() {
    register_sidebar([
        'name'			=> '桜サイドバー',
        'id'			=> 'sakura-sidebar',
        'description'	=> 'sakuraテーマ用サイドバーです',
        'before_widget'	=> '<div>',
        'after_widget'	=> '</div>',
        'before_title'	=> '<h2>',
        'after_title'	=> '</h2>',
    ]); 
}
add_action( 'widgets_init', 'sakura_widgets_init' );

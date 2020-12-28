<?php get_header();?>
    <div class="home">
        <h1>カテゴリー専用ページ:<?php the_title(); ?></h1>
        <div class="home_container">
            <div class="sidebar"><!--サイドバーを表示するエリア flexの親要素-->
                <div class="sidebar_menu"><!--サイドバー flexの子要素-->
                    <?php get_sidebar();?>
                </div>
            </div><!--サイドバーが表示されるエリアの閉じタグ flexの親要素-->
            
            <div class="home_content">
                <div class="home_topic">
                    <?php comments_template(); ?>
                </div>
            </div>

        </div>

    </div>
<?php get_footer();?>
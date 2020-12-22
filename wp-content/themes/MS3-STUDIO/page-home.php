<?php get_header();?>

    <h1>投稿一覧</h1>
    <div class="home_container">
        <div class="home_content">
            <div class="home_topic">
                <?php comments_template(); ?>
            </div>
        </div>

        <div class="sidebar"><!--サイドバーを表示するエリア flexの親要素-->         
            <div class="sidebar_menu"><!--サイドバー flexの子要素-->
                <?php get_sidebar();?>
            </div>
        </div><!--サイドバーが表示されるエリアの閉じタグ flexの親要素-->
    </div>

<?php get_footer();?>
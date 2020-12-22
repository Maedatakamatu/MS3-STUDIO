<?php get_header();?>
    <article>
        <section id="sec1-firstview">
            <h1><?php bloginfo('name'); ?></h1>
            <div>
                <p><?php bloginfo('description')?></p>
                <a href="#sec3-portfolio" class="btn">制作実績を見る</a>
                <a href="#sec5-contactform" class="btn">お仕事のご依頼</a>
            </div>
        </section>
    
    
        <a href="<?php echo get_post_type_archive_link("items");?>">商品一覧</a>
        
        <?php comments_template(); ?>


    <div class="sidebar"><!--サイドバーを表示するエリア flexの親要素-->
        <div class="sidebarLeft"><!--サイドバーの横に表示されるコンテンツ flexの子要素-->
        <section id="sec2-profile">
            <h1>プロフィール</h1>
            <button id="img-change">画像変更</button>
            <button id="size-up">画像拡大</button>
            <div class="profile-contents">
                <div class="profile-text">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium veniam laborum, sint earum
                        similique quidem harum reiciendis tempora repellendus dignissimos sequi libero doloribus optio.
                        Reprehenderit similique tempora hic eum eos dolorum sapiente ullam debitis? Id voluptatibus eum
                        doloremque tempora sapiente aut dolores fugiat ea excepturi consequatur facere vero repudiandae
                        cumque consequuntur, maxime autem omnis repellat amet veniam perferendis saepe. Voluptatibus.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/photo_02.png" alt="プロフィール画像">
            </div>
        </section>

 
        <section id="sec3-portfolio" class="slide-bottom" data-plugin-options='{"speed":300,"reverse": false}'>
            <h1>制作実績</h1>
            <div class="portfolio">
            <?php $query = new WP_Query( ['post_type' => 'portfolio' ,'posts_per_page' => 3 ]); ?><!-- codexからコピペ。取得する投稿タイプを指定できる。(portfolioの部分はfunctions.phpで指定したpost_type名)可読性のためにarrayから[]に変更しました。表示件数を3件に設定-->
            <?php if($query->have_posts()):?>
            <?php while($query->have_posts()): $query->the_post(); ?>
                <div class="portfolio-content">
                <img src="<?php the_field("product_image") ;?>" alt="<?php the_field("product_name") ;?>の画像"> 
                    <h2><?php the_field("product_name") ;?></h2>
                    <p><?php the_field("about_product") ;?></p>
                </div>
                <?php endwhile;?>
                <?php else:?>
                <p>制作実績はありません</p>
                <?php endif;?>
                <?php wp_reset_postdata(); ?><!-- 39行目の指定をリセット。リセットしたので以下でpostの取得をした場合、デフォルトの投稿(ブログの情報)を取得するようになる-->

            </div>
        </section>




        <section id="sec4-newblog" class="slide-bottom" data-plugin-options='{"speed":300,"reverse": false}'>
            <h1>新着記事</h1>
            <div class="blog">
            <?php if(have_posts()):?>
            <?php while(have_posts()): the_post(); ?>
                <div class="blog-content">
                    <?php the_post_thumbnail();  ?>
                    <div class="blog-info">
                        <a href=""><h2><?php the_title(); ?></h2></a>
                        <p><?php the_excerpt(); ?></p>
                        <a href="#"><i class="fas fa-globe-americas"></i><?php the_category(); ?></a><a href="#"><i
                                class="fas fa-globe-americas"></i><?php the_time('Y年n月j日') ?></a>
                    </div>
                </div>
                <?php endwhile;?>
                <?php else:?>
                <p>新着記事はありません</p>
                <?php endif;?>
            </div>
        </section>




        <section id="sec5-contactform">
            <h1>お問い合わせ</h1>
            <p>制作のご依頼・ご相談はこちらから<br>お気軽にお問い合わせください。</p>

            <?php echo apply_filters('the_content', '[contact-form-7 id="93" title="お問い合わせ2"]'); ?><!-- ショートコードを呼び出す -->

        </section>
        </div>


        <div class="sidebarRight"><!--サイドバー flexの子要素-->
        <?php get_sidebar();?>
        </div>
    </div><!--サイドバーが表示されるエリアの閉じタグ flexの親要素-->
    </article>



<?php get_footer();?>
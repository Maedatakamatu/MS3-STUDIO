<h2>「<?php the_search_query(); ?>」の検索結果 : <?php echo $wp_query->found_posts; ?>件</h2>
<!-- 投稿情報 loop -->
<?php if(have_posts()) : ?>
    <?php while(have_posts()):the_post() ?>         
        <a href="<?php the_permalink(); ?>">
            <h3>
                <?php the_title(); ?>
            </h3>
        </a>
    <?php endwhile; ?>
<?php else: ?>
    <div class="post">
        <p>申し訳ございません。<br />該当する記事がございません。</p>
    </div>
<?php endif; ?>

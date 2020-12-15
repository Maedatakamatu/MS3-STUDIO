<!-- single.phpのコードをコピペ -->
<?php get_header();?>
<br>
<br>
<br>
<br>
        <?php the_post(); ?>
        <div class="blog-content">
            <div class="blog-info">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        </div>
<?php get_footer();?>
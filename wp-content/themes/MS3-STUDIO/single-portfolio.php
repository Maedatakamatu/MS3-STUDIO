<?php get_header();?>
<br>
<br>
<br>
<br>
        <?php the_post(); ?>
        <div class="blog-content">
            <?php the_post_thumbnail();  ?>
            <div class="blog-info">
              <p>作品名<?php the_field("product_name") ;?></p>
              <p>商品詳細<?php the_field("about_product") ;?></p>
              <img src="<?php the_field("product_image") ;?>" alt="<?php the_field("product_name") ;?>の画像">
            </div>
        </div>
<?php get_footer();?>
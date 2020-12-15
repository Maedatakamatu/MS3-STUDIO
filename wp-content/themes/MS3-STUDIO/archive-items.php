<?php get_header();?>
<br>
<br>
<br>
<br>
<?php if(have_posts()):?>
    <?php while(have_posts()): the_post(); ?>
        <div class="blog-content">
            <?php the_post_thumbnail();  ?>
            <a href="<?php echo get_permalink();?>">
            <div class="blog-info">
              <p>商品名<?php the_field("item_name") ;?></p>
              <p>商品価格<?php the_field("price") ;?></p>
              <img src="<?php the_field("item_image") ;?>" alt="<?php the_field("item_name") ;?>の画像">
            </div>
            </a>
        </div>          
    <?php endwhile;?>
<?php else:?>
<p>商品はまだはありません</p>
<?php endif;?>

<?php get_footer();?>


<div class="sticky">
	<?php 
		if( is_active_sidebar('home_sidebar')):
		dynamic_sidebar('home_sidebar');
		endif;
	?>
	<li class="category_list">
		<h3 class="widget-title">カテゴリ一覧</h3>
		<?php
			$posts = get_posts();
			foreach($posts as $post):
		?>
		<div class="list">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>
		<?php endforeach; ?>
	</li>
</div>

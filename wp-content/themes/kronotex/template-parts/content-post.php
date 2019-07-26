<div class="onlineShop__content">
	<h2 class="onlineShop__content_h2">
		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
	</h2>
	<div class="onlineShop__content_post">
		  	
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('thumbnail'); ?>
		</a>
	</div>
</div><!-- .onlineShop__content -->


<!-- 
	the_excerpt() - Выводит отрывок (цитату) поста, со вставкой в конец [...] (но это не ссылка на прочтение полного материала)
-->
<!-- 
	the_post_thumbnail($size, $attr) - Выводит html код картинки-миниатюры текущего поста. 
-->
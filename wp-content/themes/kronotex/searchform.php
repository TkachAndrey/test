
<form class="top__item_link top__item_input" action="<?php echo home_url( '/' ) ?>">
	<input type="text" id="search" class="top__item_search" placeholder="Поиск" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<input type="image" class="top__item_zoom" src="<?php bloginfo('template_directory'); ?>/assets/img/search.svg" alt="search">
</form>
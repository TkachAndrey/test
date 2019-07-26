<?php 


	function style_connector() {
		wp_enqueue_style( 'slickSliderStylesheet', get_template_directory_uri() .'/assets/css/slick.css');
		wp_enqueue_style( 'slickSliderThemeStylesheet', get_template_directory_uri() .'/assets/css/slick-theme.css');
		wp_enqueue_style( 'mainStylesheet', get_template_directory_uri() .'/assets/css/style.css');
		wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic');
	}

	add_action( 'wp_enqueue_scripts', 'style_connector' );


	function theme_scripts() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		wp_enqueue_script('slickScript', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], null, true);
		wp_enqueue_script('mainScript', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, true);
	}

	add_action( 'wp_enqueue_scripts', 'theme_scripts' );


	function theme_register_nav_menu(){
		register_nav_menu( 'top', 'Header navigation' );
		register_nav_menu( 'footer', 'Footer navigation' );
	}

	add_action( 'after_setup_theme', 'theme_register_nav_menu' );
	// register_nav_menu() - Регистрирует одно место меню, к которому затем в админке прикрепляются меню.

	// after_setup_theme - хук-событие, Вызывается каждый раз при загрузке страницы, сразу после того, как тема инициализирована. Обычно используется для установки базовых возможностей темы.


	function title_displaying(){
		add_theme_support( 'title-tag' );
	}

	add_action('after_setup_theme', 'title_displaying');
	// add_theme_support() - Регистрирует поддержку новых возможностей темы (поддержка миниатюр, форматов записей и т.д.).
		
	// 'title-tag' - Используется вместо wp_title(). Если активировать эту опцию, то не нужно устанавливать метатег <title> ... wp_title(); ... </title> - он будет подключен автоматически через хук wp_head.


	function adding_image_preview(){
		add_theme_support('post-thumbnails', array('post', 'page') );
	}

	add_action('after_setup_theme', 'adding_image_preview');

	// 'post-thumbnails' - Позволяет устанавливать миниатюру посту. Можно передать второй аргумент функции в виде массива, в котором указать для каких типов постов разрешить миниатюры: 'post-thumbnails', array( 'post', 'movie', 'page', ... )

	add_filter( 'excerpt_length', function(){
		return 15;
	} );
	// "возвращает" количество слов в предпросмотре поста


	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}

	// acf_add_options_page - This function will add global options page to the ‘wp-admin’ dashboard.

	
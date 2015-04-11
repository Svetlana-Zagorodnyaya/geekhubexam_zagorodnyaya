<?php

/**
* загружаемые стили и скрипты
**/
function load_style_script () {
	/**wp_enqueue_script('...' get_template_directory_uri() . '
		"название скрипта в одинарных кавычках"');**/
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

/**
* загружаем стили и скрипты
**/ 
add_action('wp_enqueue_scripts', 'load_style_script');

/**
* поддержка миниатюр
**/
add_theme_support('post-thumbnails');
/**
* Меню
**/
register_nav_menu('menu', 'Меню');
/**
* сайдбар
**/
register_sidebar(array(
	'name' => 'Виджеты сайдбара',
	'id' => 'sidebar',
	'description' => 'Здесь размещайте виджеты сайдбара',
	'before_widget' => '<div class="vidget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '/h2'
));
?>

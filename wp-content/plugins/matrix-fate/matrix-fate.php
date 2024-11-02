<?php
/*
Plugin Name:		Матрица судьбы
Plugin URI:			http://matrix.contrmarketing.ru/
Description:		Плагин wp для матриц судьбы.
Version:			1.0
Author:				Александр Гаоосс
Author URI:			https://contrmarketing.ru/contacts/
License:			GPL-2.0+
License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain:		Matrix_fate
*/

if (!function_exists( 'add_action')) {
	exit;
}
define('MATRX_FATE', plugin_dir_path(__FILE__));

class MatrixFate{
	//переменные
	static private $class = null;
	
	//методы
	public static function init() {
		if (null === self::$class)
		self :: $class = new self;
		return self :: $class;
	}
	
	public function __construct() {
		//запускаем конструктор класса
		add_action ('init', array($this, 'matrix_post_type'));
		
		//add_filter( 'page_template', 'matrix_page_pers_template' );
		//add_filter( 'page_templ', 'matrix_page_sovm_template' );
		
	}
	
	//update rewrite rules
	static function activation(){
		flush_rewrite_rules();
	}
	static function deactivation(){
		flush_rewrite_rules();
	}
	
	/*
	public function matrix_page_pers_template( $page_template ) {
		
		if ( get_page_template_slug() == 'page-pers.php' ) {
			$page_template = dirname( __FILE__ ) . '/parts/page-pers.php';
		}
		return $page_template;
	}
	public function matrix_page_sovm_template( $page_templ ) {
		if ( get_page_template_slug() == 'page-sovm.php' ) {
			$page_templ = dirname( __FILE__ ) . '/parts/page-sovm.php';
		}
		return $page_templ;
	}
	*/
	
	// Инициируем 2 таксономии и кастомный тип записи
	public function matrix_post_type() {
		register_taxonomy( 'matrix_fate_type', array( 'matrix_fate' ),
		array(
			'labels'	=> array(
				'name' => 'Типы матрицы судьбы',
				'singular_name' => 'Тип матрицы судьбы',
				'menu_name' => 'Типы матриц',
				'all_items'		=> 'Все типы матриц'
			),
				'public'			=> true,
				'hierarchical'		=> true,
				'rewrite'			=> array( 'slug' => 'mf_type', 'hierarchical' => true, 'with_front' => false ),
				'show_in_rest'		=> true,
				'show_ui'			=> true,
			)
		);
		register_taxonomy( 'matrix_fate_transcripts', array( 'matrix_fate' ),
		array(
			'labels'	=> array(
				'name'			=> 'Расшифровка матрицы судьбы',
				'singular_name'	=> 'Расшифровка матрицы судьбы',
				'menu_name'		=> 'Расшифровки',
				'all_items'		=> 'Все расшифровки'
			),
				'public'			=> true,
				'hierarchical'		=> true,
				'rewrite'			=> array( 'slug' => 'mf_trsc', 'hierarchical' => true, 'with_front' => false ),
				'show_in_rest'		=> true,
				'show_ui'			=> true,
			)
		);
		register_post_type('matrix_fate', [
			
			'labels'	=> [
				'name'					=> 'Матрицы',
				'singular_name'			=> 'Матрицы',
				'name_admin_bar'		=> 'Матрицу судьбы',
				'menu_name'				=> 'Матрицы судьбы',
				'add_new'				=> 'Добавить матрицу',
				'add_new_item'			=> 'Добавить матрицу',
				'edit_item'				=> 'Редактировать матрицу',
				'new_item'				=> 'Новая матрица',
				'view_item'				=> 'Посмотреть матрицу',
				'search_items'			=> 'Найти матрицу',
				'not_found'				=> 'Матриц не найдено',
				'not_found_in_trash'	=> 'В корзине нет таких матриц',
				'featured_image'		=> 'Фото мтрицы',
				'set_featured_image'	=> 'Установите Фотографию матрицы',
				'title_placeholder'		=> 'Введите название матрицы',
				'first_menu_name'		=> 'Список матриц',
			],
			'public'			=> true,
			'description'		=> 'Всевозможные калькуляторы матрицы судьбы',
			'publicly_queryable'	=> true,
			'rewrite'				=> [ 'slug' => 'matrix'],
			'capability_type'		=> 'page',
			'show_ui'			=> true,
			'show_in_menu'		=> true,
			'show_in_admin_bar'	=> true,
			'show_in_rest'		=> true,
			'query_var'			=> true,
			'menu_icon'			=> 'dashicons-welcome-widgets-menus',
			'menu_position'		=> 8,
			'has_archive'			=> 'matrix-arch',
			'hierarchical'			=> false,
			'template_item'			=> 'single.php',
			'posts_per_page'		=> 10,
			'supports'			=> ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'],
			'taxonomies'		=> array('matrix_fate_type', 'matrix_fate_transcripts'),
		]);
	}
	
	
}
// End of Class MatrixFate

if (class_exists('MatrixFate')) {
	new MatrixFate();
}

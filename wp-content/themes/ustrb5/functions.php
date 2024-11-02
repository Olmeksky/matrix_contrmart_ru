<?php
/*
 * This is the child theme for Understrap theme.
 */
add_action( 'wp_enqueue_scripts', 'ustrb5_enqueue_styles' );
function ustrb5_enqueue_styles() {
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', get_stylesheet_directory_uri() . '/assets/js/jquery-3.7.1.min.js');
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' );
	
	// подключаем свои скрипты
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js');
	
}
/* Ваш дополнительный код */

/*
add_action ('init', 'matrix_post_type');
function matrix_post_type() {
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
			'publicly_queryable'	=> true,
			'rewrite'				=> [ 'slug' => 'matrix'],
			'capability_type'		=> 'post',
			'show_ui'			=> true,
			'show_in_menu'		=> true,
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
*/

/* Функция инициализации */

add_action('init', 'my_custom_init');
function my_custom_init(){
	
	/* Новый тип записи Случайные карты */
	register_post_type('randcard', array(
		'labels'					=> array(
			'name'					=> 'Карты',
			'singular_name'			=> 'Карта',
			'name_admin_bar'		=> 'Загрузка карт',
			'menu_name'				=> 'Загрузить карты',
			'add_new'				=> 'Добавить новую',
			'add_new_item'			=> 'Добавить новую Карту',
			'edit_item'				=> 'Редактировать Карту',
			'new_item'				=> 'Новая Карта',
			'view_item'				=> 'Посмотреть Карту',
			'search_items'			=> 'Найти Карту',
			'not_found'				=> 'Карт не найдено',
			'not_found_in_trash'	=> 'В корзине Карт не найдено',
			'parent_item_colon'		=> '',
			'featured_image'		=> 'Фото Карты',
			'set_featured_image'	=> 'Установите Фотографию Карты'
		),
		'public'				=> true,
		'rewrite'				=> [ 'slug' => 'randcard' ],
		'capability_type'		=> 'post',
		'has_archive'			=> 'randcard-arch',
		'publicly_queryable'	=> true,
		'query_var'				=> true,
		'hierarchical'			=> false,
		'menu_position'			=> 4,
		'supports'				=> array('title','editor','thumbnail','excerpt','custom-fields','page-attributes','post-formats'),
		'menu_icon'				=> 'dashicons-tablet',
		'template_item'			=> 'single.php',
		'posts_per_page'		=> 6,
		'show_in_rest'			=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true
	) );
	
}

// функция вывода короккого содержимого
function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}


?>
<?php
function randomCard() {
query_posts('post_type=randcard&orderby=rand&showposts=1');
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
	<div class="col-12">
		<div class="randcard_wrap2">
			<a href="<?php the_permalink();?>"><img class="randcard_img2" src="<?php echo get_the_post_thumbnail_url();?>" alt=""/></a>
		</div>
	</div>
</div>
<?php endwhile; endif;
}
?>
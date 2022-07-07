<?php
function load_stylesheets()
{
    wp_register_style('bootstrap',  'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js', null, true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapjs', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js', null, true);
    wp_enqueue_script('bootstrapjs');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function load_scripts()
{
    wp_register_script('customjs', get_template_directory_uri() . '/includes/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','load_scripts');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('small',500,500, true);
add_image_size('large',600,600, true);

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

register_sidebar (
    array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function urun_posttype() {
	$args = array(
		'labels' => array(
        'name' => 'Ürünler',
        'singular_name' => 'ürün',
     ),
		'hierarchical' => false,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-store',
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'custom-fields'),
		'rewrite' => array('slug' => 'urun'),
	);

	register_post_type( 'urun',$args);
}

add_action( 'init', 'urun_posttype' );

function urun_taxonomy() {

	register_taxonomy(
		'urun-list',
		'urun',
		array(
			'labels' => array(
				'name' => 'Ürün Kategorileri',
				'singular_name' => 'Ürün Kategori',
			 ),
			'rewrite' => array( 'slug' => 'urun-list', 'with_front' => TRUE ),
			'public' => true,
			'hierarchical' => true,
		)
	);
}
add_action('init', 'urun_taxonomy');

//define('DISALLOW_FILE_EDIT', true);
//bu kod temaların düzenlenmesini engeller


function remove_menus() {
    //remove_menu_page( 'index.php' );                  //Dashboard
    //remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page( 'edit.php?post_type=page' );    //Pages
    //remove_menu_page( 'edit-comments.php' );          //Comments
    //remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    //remove_menu_page( 'users.php' );                  //Users
    //remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
    //bu kodları admin menüsünde belirli sayfaları kapatır url üzerinden girilebilir
 
  if(current_user_can('editor', 'author', 'user'))
  add_action( 'admin_menu', 'remove_menus' );
}


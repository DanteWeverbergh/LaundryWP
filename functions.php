<?php

/**
 * All theme functionality
 */
add_theme_support('post-thumbnails');

/**
 * Register Custom Navigation Walker
 */
function laundry_register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'laundry_register_navwalker' );



function laundry_scripts() {

    //equeue css
    wp_enqueue_style( 'gfonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap');
    wp_enqueue_style( 'fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css');
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/style.min.css', array('gfonts', 'fontawsome', 'owlcarousel'), '1.0', 'all');
    
    //equeue scripts
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array ( 'jquery' ));
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/main.js', array ( 'jquery', 'bootstrap', 'owlcarousel' ), 1.0, true);
    

}
  add_action( 'wp_enqueue_scripts', 'laundry_scripts' );

/**
* ACF testimonial
*/ 
function laundry_acf_blocks_init() {
 // Check function exists.
   if( function_exists('acf_register_block_type') ) {
          // Register a testimonial block.
          acf_register_block_type(array(
              'name'              => 'testimonial',
              'title'             => __('Testimonial'),
              'description'       => __('A custom testimonial block.'),
              'render_template'   => '/template-parts/blocks/testimonial/testimonial.php',
              'category'          => 'formatting',
              'icon'              => 'admin-users',
              'keywords'          => array('testimonial', 'quote', 'client'),
          ));
      }
}
add_action('acf/init', 'laundry_acf_blocks_init');

function laundry_banner_acf_blocks_init() {
  // Check function exists.
    if( function_exists('acf_register_block_type') ) {
           // Register a testimonial block.
           acf_register_block_type(array(
               'name'              => 'banner',
               'title'             => __('banner'),
               'description'       => __('A custom banner block.'),
               'render_template'   => '/template-parts/blocks/banner/banner.php',
               'category'          => 'formatting',
               'icon'              => 'cover-image',
               'keywords'          => array('banner', 'picture', 'homepage'),
           ));
       }
 }
 add_action('acf/init', 'laundry_banner_acf_blocks_init');

function laundry_contact_acf_blocks_init() {
  // Check function exists.
    if( function_exists('acf_register_block_type') ) {
           // Register a testimonial block.
           acf_register_block_type(array(
               'name'              => 'contact',
               'title'             => __('contact'),
               'description'       => __('A custom contact block.'),
               'render_template'   => '/template-parts/blocks/contact/contact.php',
               'category'          => 'formatting',
               'icon'              => 'info',
               'keywords'          => array('contact', 'info', 'adress'),
           ));
       }
}
add_action('acf/init', 'laundry_contact_acf_blocks_init');


function laundry_register_my_menus() {
   register_nav_menus(
     array(
       'top-left' => __( 'Top Left' ),
       'top-right' => __( 'Top Right' ),
       'navbar-primary' => __( 'Primary Navbar' ),
       'footer' => __( 'Footer Quick List' )
      )
    );
}
add_action( 'init', 'laundry_register_my_menus' );



// Register Custom Post Type
function laundry_register_cpt_services() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'laundry' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'laundry' ),
		'menu_name'             => __( 'Services', 'laundry' ),
		'name_admin_bar'        => __( 'Service', 'laundry' ),
		'archives'              => __( 'Item Archives', 'laundry' ),
		'attributes'            => __( 'Item Attributes', 'laundry' ),
		'parent_item_colon'     => __( 'Parent Item:', 'laundry' ),
		'all_items'             => __( 'All Items', 'laundry' ),
		'add_new_item'          => __( 'Add New Item', 'laundry' ),
		'add_new'               => __( 'Add New', 'laundry' ),
		'new_item'              => __( 'New Item', 'laundry' ),
		'edit_item'             => __( 'Edit Item', 'laundry' ),
		'update_item'           => __( 'Update Item', 'laundry' ),
		'view_item'             => __( 'View Item', 'laundry' ),
		'view_items'            => __( 'View Items', 'laundry' ),
		'search_items'          => __( 'Search Item', 'laundry' ),
		'not_found'             => __( 'Not found', 'laundry' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'laundry' ),
		'featured_image'        => __( 'Featured Image', 'laundry' ),
		'set_featured_image'    => __( 'Set featured image', 'laundry' ),
		'remove_featured_image' => __( 'Remove featured image', 'laundry' ),
		'use_featured_image'    => __( 'Use as featured image', 'laundry' ),
		'insert_into_item'      => __( 'Insert into item', 'laundry' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'laundry' ),
		'items_list'            => __( 'Items list', 'laundry' ),
		'items_list_navigation' => __( 'Items list navigation', 'laundry' ),
		'filter_items_list'     => __( 'Filter items list', 'laundry' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'laundry' ),
		'description'           => __( 'CPT Services', 'laundry' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
    'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Services', $args );

}
add_action( 'init', 'laundry_register_cpt_services', 0 );

/**
 * extra content
 */

 function laundry_services_page_content() {
   
    $id = 91;
    $content = apply_filters('the_content', get_the_content(null, false, $id));

   return $content;
}



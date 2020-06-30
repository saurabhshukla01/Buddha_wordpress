<?php 
//======================================================
//===========Register Custom Slider Type Start =========
//======================================================
function Slider() {

	$labels = array(
		'name'                  => _x( 'Slider', 'Post Type General Name', 'Slider' ),
		'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'Slider' ),
		'menu_name'             => __( 'Slider', 'Slider' ),
		'name_admin_bar'        => __( 'Slider', 'Slider' ),
		'archives'              => __( 'Item Archives', 'Slider' ),
		'attributes'            => __( 'Item Attributes', 'Slider' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Slider' ),
		'all_items'             => __( 'All Slider', 'Slider' ),
		'add_new_item'          => __( 'Add New Item', 'Slider' ),
		'add_new'               => __( 'Add New Slider', 'Slider' ),
		'new_item'              => __( 'New Item', 'Slider' ),
		'edit_item'             => __( 'Edit Item', 'Slider' ),
		'update_item'           => __( 'Update Item', 'Slider' ),
		'view_item'             => __( 'View Item', 'Slider' ),
		'view_items'            => __( 'View Items', 'Slider' ),
		'search_items'          => __( 'Search Item', 'Slider' ),
		'not_found'             => __( 'Not found', 'Slider' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Slider' ),
		'featured_image'        => __( 'Featured Image', 'Slider' ),
		'set_featured_image'    => __( 'Set featured image', 'Slider' ),
		'remove_featured_image' => __( 'Remove featured image', 'Slider' ),
		'use_featured_image'    => __( 'Use as featured image', 'Slider' ),
		'insert_into_item'      => __( 'Insert into item', 'Slider' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Slider' ),
		'items_list'            => __( 'Items list', 'Slider' ),
		'items_list_navigation' => __( 'Items list navigation', 'Slider' ),
		'filter_items_list'     => __( 'Filter items list', 'Slider' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'Slider' ),
		'description'           => __( 'Post Type Description', 'Slider' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'Slider', $args );

}
add_action( 'init', 'Slider', 0 );
//======================================================
//===========Register Custom Slider Type End ===========
//======================================================




//==========================================================
//===========Register Custom Testimonial Type Start ========
//==========================================================
function Testimonial() {

	$labels = array(
		'name'                  => _x( 'Testimonial', 'Post Type General Name', 'Testimonial' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'Testimonial' ),
		'menu_name'             => __( 'Testimonial', 'Testimonial' ),
		'name_admin_bar'        => __( 'Testimonial', 'Testimonial' ),
		'archives'              => __( 'Item Archives', 'Testimonial' ),
		'attributes'            => __( 'Item Attributes', 'Testimonial' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Testimonial' ),
		'all_items'             => __( 'All Testimonial', 'Testimonial' ),
		'add_new_item'          => __( 'Add New Item', 'Testimonial' ),
		'add_new'               => __( 'Add New Testimonial', 'Testimonial' ),
		'new_item'              => __( 'New Item', 'Testimonial' ),
		'edit_item'             => __( 'Edit Item', 'Testimonial' ),
		'update_item'           => __( 'Update Item', 'Testimonial' ),
		'view_item'             => __( 'View Item', 'Testimonial' ),
		'view_items'            => __( 'View Items', 'Testimonial' ),
		'search_items'          => __( 'Search Item', 'Testimonial' ),
		'not_found'             => __( 'Not found', 'Testimonial' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Testimonial' ),
		'featured_image'        => __( 'Featured Image', 'Testimonial' ),
		'set_featured_image'    => __( 'Set featured image', 'Testimonial' ),
		'remove_featured_image' => __( 'Remove featured image', 'Testimonial' ),
		'use_featured_image'    => __( 'Use as featured image', 'Testimonial' ),
		'insert_into_item'      => __( 'Insert into item', 'Testimonial' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Testimonial' ),
		'items_list'            => __( 'Items list', 'Testimonial' ),
		'items_list_navigation' => __( 'Items list navigation', 'Testimonial' ),
		'filter_items_list'     => __( 'Filter items list', 'Testimonial' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'Testimonial' ),
		'description'           => __( 'Post Type Description', 'Testimonial' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'Testimonial', $args );

}
add_action( 'init', 'Testimonial', 0 );
//======================================================
//===========Register Custom Testimonial Type End ======
//======================================================








//==========================================================
//===========Register Custom Destinations Type Start =======
//==========================================================
function Destinations() {

	$labels = array(
		'name'                  => _x( 'Destinations', 'Post Type General Name', 'Destinations' ),
		'singular_name'         => _x( 'Destinations', 'Post Type Singular Name', 'Destinations' ),
		'menu_name'             => __( 'Destinations', 'Destinations' ),
		'name_admin_bar'        => __( 'Destinations', 'Destinations' ),
		'archives'              => __( 'Item Archives', 'Destinations' ),
		'attributes'            => __( 'Item Attributes', 'Destinations' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Destinations' ),
		'all_items'             => __( 'All Destinations', 'Destinations' ),
		'add_new_item'          => __( 'Add New Item', 'Destinations' ),
		'add_new'               => __( 'Add New Destinations', 'Destinations' ),
		'new_item'              => __( 'New Item', 'Destinations' ),
		'edit_item'             => __( 'Edit Item', 'Destinations' ),
		'update_item'           => __( 'Update Item', 'Destinations' ),
		'view_item'             => __( 'View Item', 'Destinations' ),
		'view_items'            => __( 'View Items', 'Destinations' ),
		'search_items'          => __( 'Search Item', 'Destinations' ),
		'not_found'             => __( 'Not found', 'Destinations' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Destinations' ),
		'featured_image'        => __( 'Featured Image', 'Destinations' ),
		'set_featured_image'    => __( 'Set featured image', 'Destinations' ),
		'remove_featured_image' => __( 'Remove featured image', 'Destinations' ),
		'use_featured_image'    => __( 'Use as featured image', 'Destinations' ),
		'insert_into_item'      => __( 'Insert into item', 'Destinations' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Destinations' ),
		'items_list'            => __( 'Items list', 'Destinations' ),
		'items_list_navigation' => __( 'Items list navigation', 'Destinations' ),
		'filter_items_list'     => __( 'Filter items list', 'Destinations' ),
	);
	$args = array(
		'label'                 => __( 'Destinations', 'Destinations' ),
		'description'           => __( 'Post Type Description', 'Destinations' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'Destinations', $args );

}
add_action( 'init', 'Destinations', 0 );
//======================================================
//===========Register Custom Destinations Type End =====
//======================================================














//==========================================================
//===========Register Custom Popular Tours Type Start =======
//==========================================================
function Popular_Tours() {

	$labels = array(
		'name'                  => _x( 'Popular Tours', 'Post Type General Name', 'Popular Tours' ),
		'singular_name'         => _x( 'Popular Tours', 'Post Type Singular Name', 'Popular Tours' ),
		'menu_name'             => __( 'Popular Tours', 'Popular Tours' ),
		'name_admin_bar'        => __( 'Popular Tours', 'Popular Tours' ),
		'archives'              => __( 'Item Archives', 'Popular Tours' ),
		'attributes'            => __( 'Item Attributes', 'Popular Tours' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Popular Tours' ),
		'all_items'             => __( 'All Popular Tours', 'Popular Tours' ),
		'add_new_item'          => __( 'Add New Item', 'Popular Tours' ),
		'add_new'               => __( 'Add New Popular Tours', 'Popular Tours' ),
		'new_item'              => __( 'New Item', 'Popular Tours' ),
		'edit_item'             => __( 'Edit Item', 'Popular Tours' ),
		'update_item'           => __( 'Update Item', 'Popular Tours' ),
		'view_item'             => __( 'View Item', 'Popular Tours' ),
		'view_items'            => __( 'View Items', 'Popular Tours' ),
		'search_items'          => __( 'Search Item', 'Popular Tours' ),
		'not_found'             => __( 'Not found', 'Popular Tours' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Popular Tours' ),
		'featured_image'        => __( 'Featured Image', 'Popular Tours' ),
		'set_featured_image'    => __( 'Set featured image', 'Popular Tours' ),
		'remove_featured_image' => __( 'Remove featured image', 'Popular Tours' ),
		'use_featured_image'    => __( 'Use as featured image', 'Popular Tours' ),
		'insert_into_item'      => __( 'Insert into item', 'Popular Tours' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Popular Tours' ),
		'items_list'            => __( 'Items list', 'Popular Tours' ),
		'items_list_navigation' => __( 'Items list navigation', 'Popular Tours' ),
		'filter_items_list'     => __( 'Filter items list', 'Popular Tours' ),
	);
	$args = array(
		'label'                 => __( 'Popular Tours', 'Popular Tours' ),
		'description'           => __( 'Post Type Description', 'Popular Tours' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => false,
	);
	register_post_type( 'Popular Tours', $args );

}
add_action( 'init', 'Popular_Tours', 0 );
//======================================================
//===========Register Custom Popular Tours Type End =====
//======================================================









<?php
// Register Custom Post Type 'R_views'
function register_r_views_post_type() {
    $labels = array(
        'name' => 'R_views',
        'singular_name' => 'R_view',
        'menu_name' => 'R_views',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New R_view',
        'edit_item' => 'Edit R_view',
        'new_item' => 'New R_view',
        'view_item' => 'View R_view',
        'view_items' => 'View R_views',
        'search_items' => 'Search R_views',
        'not_found' => 'No R_views found',
        'not_found_in_trash' => 'No R_views found in trash',
        'all_items' => 'All R_views',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled', // Choose an appropriate dashicon
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    );

    register_post_type('r_views', $args);
}

add_action('init', 'register_r_views_post_type');










// Add fields
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65eef33988b21',
	'title' => 'Review Field',
	'fields' => array(
		array(
			'key' => 'field_65eef33a5778f',
			'label' => 'about',
			'name' => 'about',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'r_views',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );



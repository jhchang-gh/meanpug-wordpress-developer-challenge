<?php
/**
 * Custom post type for Locations
 *
 */

class PUG_Post_Type_Location extends PUG_Post_Type {

	/**
	 * Name of the custom post type.
	 *
	 * @var string
	 */
	public $name = 'location';

	/**
	 * Creates the post type.
	 */
	public function create_post_type() {
		register_post_type(
			$this->name,
			[
				'labels' => [
					'name'                     => __( 'Locations', 'pug' ),
					'singular_name'            => __( 'Location', 'pug' ),
					'add_new'                  => __( 'Add New Location', 'pug' ),
					'add_new_item'             => __( 'Add New Location', 'pug' ),
					'edit_item'                => __( 'Edit Location', 'pug' ),
					'new_item'                 => __( 'New Location', 'pug' ),
					'view_item'                => __( 'View Location', 'pug' ),
					'view_items'               => __( 'View Locations', 'pug' ),
					'search_items'             => __( 'Search Locations', 'pug' ),
					'not_found'                => __( 'No Locations found', 'pug' ),
					'not_found_in_trash'       => __( 'No Locations found in Trash', 'pug' ),
					'parent_item_colon'        => __( 'Parent Location:', 'pug' ),
					'all_items'                => __( 'All Locations', 'pug' ),
					'archives'                 => __( 'Location Archives', 'pug' ),
					'attributes'               => __( 'Location Attributes', 'pug' ),
					'insert_into_item'         => __( 'Insert into Blog post', 'pug' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this Location', 'pug' ),
					'featured_image'           => __( 'Featured Image', 'pug' ),
					'set_featured_image'       => __( 'Set featured image', 'pug' ),
					'remove_featured_image'    => __( 'Remove featured image', 'pug' ),
					'use_featured_image'       => __( 'Use as featured image', 'pug' ),
					'filter_items_list'        => __( 'Filter Locations list', 'pug' ),
					'items_list_navigation'    => __( 'Locations list navigation', 'pug' ),
					'items_list'               => __( 'Locations list', 'pug' ),
					'item_published'           => __( 'Location published.', 'pug' ),
					'item_published_privately' => __( 'Location published privately.', 'pug' ),
					'item_reverted_to_draft'   => __( 'Location reverted to draft.', 'pug' ),
					'item_scheduled'           => __( 'Location scheduled.', 'pug' ),
					'item_updated'             => __( 'Location updated.', 'pug' ),
					'menu_name'                => __( 'Locations', 'pug' ),
				],
				'public' => true,
				'menu_icon' => 'dashicons-images-alt',
				'show_ui' => true,
				'show_in_rest' => true,
				'has_archive' => true,
				'hierarchical' => true,
				'supports' => [ 'title','excerpt' ],
			]
		);
	}
}
$pug_post_type_location = new PUG_Post_Type_Location();
<?php
/**
 * Custom post type for Attorneys
 *
 */

class PUG_Post_Type_Attorney extends PUG_Post_Type {

	/**
	 * Name of the custom post type.
	 *
	 * @var string
	 */
	public $name = 'attorney';

	/**
	 * Creates the post type.
	 */
	public function create_post_type() {
		register_post_type(
			$this->name,
			[
				'labels' => [
					'name'                     => __( 'Attorneys', 'pug' ),
					'singular_name'            => __( 'Attorney', 'pug' ),
					'add_new'                  => __( 'Add New Attorney', 'pug' ),
					'add_new_item'             => __( 'Add New Attorney', 'pug' ),
					'edit_item'                => __( 'Edit Attorney', 'pug' ),
					'new_item'                 => __( 'New Attorney', 'pug' ),
					'view_item'                => __( 'View Attorney', 'pug' ),
					'view_items'               => __( 'View Attorneys', 'pug' ),
					'search_items'             => __( 'Search Attorneys', 'pug' ),
					'not_found'                => __( 'No Attorneys found', 'pug' ),
					'not_found_in_trash'       => __( 'No Attorneys found in Trash', 'pug' ),
					'parent_item_colon'        => __( 'Parent Attorney:', 'pug' ),
					'all_items'                => __( 'All Attorneys', 'pug' ),
					'archives'                 => __( 'Attorney Archives', 'pug' ),
					'attributes'               => __( 'Attorney Attributes', 'pug' ),
					'insert_into_item'         => __( 'Insert into Blog post', 'pug' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this Attorney', 'pug' ),
					'featured_image'           => __( 'Featured Image', 'pug' ),
					'set_featured_image'       => __( 'Set featured image', 'pug' ),
					'remove_featured_image'    => __( 'Remove featured image', 'pug' ),
					'use_featured_image'       => __( 'Use as featured image', 'pug' ),
					'filter_items_list'        => __( 'Filter Attorneys list', 'pug' ),
					'items_list_navigation'    => __( 'Attorneys list navigation', 'pug' ),
					'items_list'               => __( 'Attorneys list', 'pug' ),
					'item_published'           => __( 'Attorney published.', 'pug' ),
					'item_published_privately' => __( 'Attorney published privately.', 'pug' ),
					'item_reverted_to_draft'   => __( 'Attorney reverted to draft.', 'pug' ),
					'item_scheduled'           => __( 'Attorney scheduled.', 'pug' ),
					'item_updated'             => __( 'Attorney updated.', 'pug' ),
					'menu_name'                => __( 'Attorneys', 'pug' ),
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
$pug_post_type_attorney = new PUG_Post_Type_Attorney();
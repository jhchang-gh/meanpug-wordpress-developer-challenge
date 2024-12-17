<?php
/**
 * Custom post type for Practice Areas
 *
 */

class PUG_Post_Type_Practice_Area extends PUG_Post_Type {

	/**
	 * Name of the custom post type.
	 *
	 * @var string
	 */
	public $name = 'practice-area';

	/**
	 * Creates the post type.
	 */
	public function create_post_type() {
		register_post_type(
			$this->name,
			[
				'labels' => [
					'name'                     => __( 'Practice Areas', 'pug' ),
					'singular_name'            => __( 'Practice Area', 'pug' ),
					'add_new'                  => __( 'Add New Practice Area', 'pug' ),
					'add_new_item'             => __( 'Add New Practice Area', 'pug' ),
					'edit_item'                => __( 'Edit Practice Area', 'pug' ),
					'new_item'                 => __( 'New Practice Area', 'pug' ),
					'view_item'                => __( 'View Practice Area', 'pug' ),
					'view_items'               => __( 'View Practice Areas', 'pug' ),
					'search_items'             => __( 'Search Practice Areas', 'pug' ),
					'not_found'                => __( 'No Practice Areas found', 'pug' ),
					'not_found_in_trash'       => __( 'No Practice Areas found in Trash', 'pug' ),
					'parent_item_colon'        => __( 'Parent Practice Area:', 'pug' ),
					'all_items'                => __( 'All Practice Areas', 'pug' ),
					'archives'                 => __( 'Practice Area Archives', 'pug' ),
					'attributes'               => __( 'Practice Area Attributes', 'pug' ),
					'insert_into_item'         => __( 'Insert into Blog post', 'pug' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this Practice Area', 'pug' ),
					'featured_image'           => __( 'Featured Image', 'pug' ),
					'set_featured_image'       => __( 'Set featured image', 'pug' ),
					'remove_featured_image'    => __( 'Remove featured image', 'pug' ),
					'use_featured_image'       => __( 'Use as featured image', 'pug' ),
					'filter_items_list'        => __( 'Filter Practice Areas list', 'pug' ),
					'items_list_navigation'    => __( 'Practice Areas list navigation', 'pug' ),
					'items_list'               => __( 'Practice Areas list', 'pug' ),
					'item_published'           => __( 'Practice Area published.', 'pug' ),
					'item_published_privately' => __( 'Practice Area published privately.', 'pug' ),
					'item_reverted_to_draft'   => __( 'Practice Area reverted to draft.', 'pug' ),
					'item_scheduled'           => __( 'Practice Area scheduled.', 'pug' ),
					'item_updated'             => __( 'Practice Area updated.', 'pug' ),
					'menu_name'                => __( 'Practice Areas', 'pug' ),
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
$pug_post_type_practice_area = new PUG_Post_Type_Practice_Area();
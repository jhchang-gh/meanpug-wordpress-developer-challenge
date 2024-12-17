<?php
/**
 * Custom post type for Cases
 *
 */

class PUG_Post_Type_Case extends PUG_Post_Type {

	/**
	 * Name of the custom post type.
	 *
	 * @var string
	 */
	public $name = 'case';

	/**
	 * Creates the post type.
	 */
	public function create_post_type() {
		register_post_type(
			$this->name,
			[
				'labels' => [
					'name'                     => __( 'Cases', 'pug' ),
					'singular_name'            => __( 'Case', 'pug' ),
					'add_new'                  => __( 'Add New Case', 'pug' ),
					'add_new_item'             => __( 'Add New Case', 'pug' ),
					'edit_item'                => __( 'Edit Case', 'pug' ),
					'new_item'                 => __( 'New Case', 'pug' ),
					'view_item'                => __( 'View Case', 'pug' ),
					'view_items'               => __( 'View Cases', 'pug' ),
					'search_items'             => __( 'Search Cases', 'pug' ),
					'not_found'                => __( 'No Cases found', 'pug' ),
					'not_found_in_trash'       => __( 'No Cases found in Trash', 'pug' ),
					'parent_item_colon'        => __( 'Parent Case:', 'pug' ),
					'all_items'                => __( 'All Cases', 'pug' ),
					'archives'                 => __( 'Case Archives', 'pug' ),
					'attributes'               => __( 'Case Attributes', 'pug' ),
					'insert_into_item'         => __( 'Insert into Blog post', 'pug' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this Case', 'pug' ),
					'featured_image'           => __( 'Featured Image', 'pug' ),
					'set_featured_image'       => __( 'Set featured image', 'pug' ),
					'remove_featured_image'    => __( 'Remove featured image', 'pug' ),
					'use_featured_image'       => __( 'Use as featured image', 'pug' ),
					'filter_items_list'        => __( 'Filter Cases list', 'pug' ),
					'items_list_navigation'    => __( 'Cases list navigation', 'pug' ),
					'items_list'               => __( 'Cases list', 'pug' ),
					'item_published'           => __( 'Case published.', 'pug' ),
					'item_published_privately' => __( 'Case published privately.', 'pug' ),
					'item_reverted_to_draft'   => __( 'Case reverted to draft.', 'pug' ),
					'item_scheduled'           => __( 'Case scheduled.', 'pug' ),
					'item_updated'             => __( 'Case updated.', 'pug' ),
					'menu_name'                => __( 'Cases', 'pug' ),
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
$pug_post_type_case = new PUG_Post_Type_Case();
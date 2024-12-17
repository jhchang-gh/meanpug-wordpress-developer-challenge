<?php
/**
 * Custom post type for Articles
 *
 */

class PUG_Post_Type_Article extends PUG_Post_Type {

	/**
	 * Name of the custom post type.
	 *
	 * @var string
	 */
	public $name = 'article';

	/**
	 * Creates the post type.
	 */
	public function create_post_type() {
		register_post_type(
			$this->name,
			[
				'labels' => [
					'name'                     => __( 'Articles', 'pug' ),
					'singular_name'            => __( 'Article', 'pug' ),
					'add_new'                  => __( 'Add New Article', 'pug' ),
					'add_new_item'             => __( 'Add New Article', 'pug' ),
					'edit_item'                => __( 'Edit Article', 'pug' ),
					'new_item'                 => __( 'New Article', 'pug' ),
					'view_item'                => __( 'View Article', 'pug' ),
					'view_items'               => __( 'View Articles', 'pug' ),
					'search_items'             => __( 'Search Articles', 'pug' ),
					'not_found'                => __( 'No Articles found', 'pug' ),
					'not_found_in_trash'       => __( 'No Articles found in Trash', 'pug' ),
					'parent_item_colon'        => __( 'Parent Article:', 'pug' ),
					'all_items'                => __( 'All Articles', 'pug' ),
					'archives'                 => __( 'Article Archives', 'pug' ),
					'attributes'               => __( 'Article Attributes', 'pug' ),
					'insert_into_item'         => __( 'Insert into Blog post', 'pug' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this Article', 'pug' ),
					'featured_image'           => __( 'Featured Image', 'pug' ),
					'set_featured_image'       => __( 'Set featured image', 'pug' ),
					'remove_featured_image'    => __( 'Remove featured image', 'pug' ),
					'use_featured_image'       => __( 'Use as featured image', 'pug' ),
					'filter_items_list'        => __( 'Filter Articles list', 'pug' ),
					'items_list_navigation'    => __( 'Articles list navigation', 'pug' ),
					'items_list'               => __( 'Articles list', 'pug' ),
					'item_published'           => __( 'Article published.', 'pug' ),
					'item_published_privately' => __( 'Article published privately.', 'pug' ),
					'item_reverted_to_draft'   => __( 'Article reverted to draft.', 'pug' ),
					'item_scheduled'           => __( 'Article scheduled.', 'pug' ),
					'item_updated'             => __( 'Article updated.', 'pug' ),
					'menu_name'                => __( 'Articles', 'pug' ),
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
$pug_post_type_article = new PUG_Post_Type_Article();
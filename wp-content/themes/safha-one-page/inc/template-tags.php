<?php
/**
 * Custom template tags for this theme
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function safha_one_page_categorized_blog() {
	$category_count = get_transient( 'safha_one_page_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'safha_one_page_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}

/**
 * Flush out the transients used in safha-one-page_categorized_blog.
 */
function safha_one_page_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'safha_one_page_categories' );
}
add_action( 'edit_category', 'safha_one_page_category_transient_flusher' );
add_action( 'save_post',     'safha_one_page_category_transient_flusher' );
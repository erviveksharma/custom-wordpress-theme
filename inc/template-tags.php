<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package UnifyProvis
 */

if ( ! function_exists( 'unifyprovis_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function unifyprovis_posted_on() {

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( 'Posted %s', 'post date', 'unifyprovis' ),
		$time_string
	);

	$byline = sprintf(
		esc_html_x( 'By %s', 'post author', 'unifyprovis' ),
		'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
	);

	// Hide category for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'unifyprovis' ) );
		if ( $categories_list && unifyprovis_categorized_blog() ) {
			$in_category = sprintf( esc_html__( 'In %1$s', 'unifyprovis' ), $categories_list ); // WPCS: XSS OK.
		}
	}

	echo '<ul class="list-inline posted-info">
		<li>' . $byline . '</li>
		<li>' . $in_category . '</li>
		<li>' . $posted_on . '</li>
	</ul>';

}
endif;

if ( ! function_exists( 'unifyprovis_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function unifyprovis_entry_footer() {
	echo '<ul class="post-shares">';
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<li>
			<a href="' . get_comment_link() . '" title="Comments">
				<i class="rounded-x icon-speech"></i>
				<span>' . get_comments_number() . '</span>
			</a>
		</li>';
	}

	if ( current_user_can( 'edit_post' ) ) {
		echo '<li>
			<a href="' . get_edit_post_link() . '" title="Edit Post">
				<i class="rounded-x icon-pencil"></i>
			</a>
		</li>';
	}
	echo '</ul>';
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function unifyprovis_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'unifyprovis_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'unifyprovis_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so unifyprovis_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so unifyprovis_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in unifyprovis_categorized_blog.
 */
function unifyprovis_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'unifyprovis_categories' );
}
add_action( 'edit_category', 'unifyprovis_category_transient_flusher' );
add_action( 'save_post',     'unifyprovis_category_transient_flusher' );


if ( ! function_exists( 'unifyprovis_front_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function unifyprovis_front_posted_on() {

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'unifyprovis' ),
		$time_string
	);

	$byline = sprintf(
		esc_html_x( '%s', 'post author', 'unifyprovis' ),
		'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
	);

	// Hide category for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'unifyprovis' ) );
		if ( $categories_list && unifyprovis_categorized_blog() ) {
			$in_category = sprintf( esc_html__( 'In %1$s', 'unifyprovis' ), $categories_list ); // WPCS: XSS OK.
		}
	}

	echo '<ul class="list-inline news-v1-info">
			<li><span>By </span>' . $byline . '</li>
			<li>|</li>
			<li><i class="fa fa-clock-o"></i> ' . $posted_on . '</li>';
			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<li class="pull-right"><a href="' . get_comment_link() . '"><i class="fa fa-comments-o"></i> '.get_comments_number().'</a></li>';
			}

		echo '</ul>';
}
endif;

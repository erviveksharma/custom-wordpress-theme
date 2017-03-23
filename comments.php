<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnifyProvis
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<hr>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title margin-bottom-20">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'unifyprovis' ) ),
					number_format_i18n( get_comments_number() )
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'unifyprovis' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'unifyprovis' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'unifyprovis' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">
			<?php
				/*wp_list_comments( array(
					'style'      => 'li',
					'short_ping' => true,
				) );*/

				wp_list_comments('type=all&callback=unifyprovis_list_comments');
			?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'unifyprovis' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'unifyprovis' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'unifyprovis' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'unifyprovis' ); ?></p>
	<?php
	endif;

	$args = array(
		'class_form' => 'sky-form comment-style',
		'class_submit' => 'btn-u',
		'comment_field' => '<div class="sky-space-30">
			<div>
				<textarea id="comment" name="comment" rows="8" aria-required="true" class="form-control" placeholder="Write comment here ..."></textarea>
			</div>
		</div><div class="row sky-space-30">',
		'fields' => apply_filters( 'comment_form_default_fields', array(
			'author' => '<div class="col-md-6">
				<div>
				<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				'" class="form-control" aria-required="true" placeholder="Name" />
				</div>
			</div>',

			'email' => '<div class="col-md-6">
				<div>
				<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
				'" class="form-control" aria-required="true" placeholder="Email" />
				</div>
			</div></div>'
		) )

	);
	comment_form( $args );
?>

</div><!-- #comments -->

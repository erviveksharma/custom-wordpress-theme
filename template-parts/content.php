<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnifyProvis
 */

?>
<?php if ( is_single() ) : ?>

	<article id="post-<?php the_ID(); ?>" class="news-v3 bg-color-white margin-bottom-30 <?php get_post_class(); ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<!-- Featured Image -->
				<img class="img-responsive full-width" src="<?php the_post_thumbnail_url(); ?>" alt="">
		<?php endif; ?>

		<div class="news-v3-in">

			<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php unifyprovis_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif;
			?>

			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_content( sprintf(
					/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'unifyprovis' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'unifyprovis' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php unifyprovis_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-## -->

<?php else : ?>

	<article id="post-<?php the_ID(); ?>" class="row margin-bottom-20 <?php get_post_class(); ?>">
		<?php if ( has_post_thumbnail() ) : ?>
			<!-- Featured Image -->
			<div class="col-sm-5 sm-margin-bottom-20">
				<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
			</div>
		<?php endif; ?>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="col-sm-7 news-v3">
		<?php else : ?>
			<div class="col-sm-12 news-v3">
		<?php endif; ?>

			<?php
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php unifyprovis_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif;
			?>

			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					the_excerpt();
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php unifyprovis_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-## -->

	<div class="clearfix margin-bottom-20"><hr></div>

<?php endif; ?>


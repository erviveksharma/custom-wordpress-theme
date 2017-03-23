<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnifyProvis
 */

?>
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

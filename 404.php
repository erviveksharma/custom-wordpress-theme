<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package UnifyProvis
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<div class="col-md-8 col-md-offset-2">
					<div class="error-v1">
						<span class="error-v1-title">404</span>
						<span><?php echo  __( 'That’s an error!', 'unifyprovis' ); ?></span>
						<p><?php echo  __( 'The requested URL was not found on this server. That’s all we know.' ); ?></p>
						<a class="btn-u btn-bordered" href="<?php site_url(); ?>"><?php echo  __( 'Back Home' ); ?></a>
					</div>

					</div><!-- .page-content -->
			</div><!-- .col-md-8 -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

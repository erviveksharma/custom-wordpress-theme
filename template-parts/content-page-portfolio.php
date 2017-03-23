<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnifyProvis
 */

?>
<article id="post-<?php the_ID(); ?>" class="news-v3 bg-color-white margin-bottom-30 <?php get_post_class(); ?>">

			<div class="container">
				<div class="title-v1">
					<h2>Our Portfolio</h2>
					<p>Checkout the <strong>latest projects</strong> from our team. <br>
					We build a <strong>long-term relationship</strong> with our clients and focus on micro details.</p>
				</div>

				<div class="cube-portfolio">
					<?php
						global $post;
	            		$technologies = get_terms( 'technology', array( 'menu_order' => 'ASC' ) );
            		?>

					<div id="filters-container" class="cbp-l-filters-button">
						<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
						<?php foreach ($technologies as $technology) : ?>
							<div data-filter=".<?php echo $technology->slug; ?>" class="cbp-filter-item"> <?php echo $technology->name; ?> </div>
						<?php endforeach; ?>
					</div><!--/end Filters Container-->

					<div id="grid-container" class="cbp-l-grid-gallery">
						<?php
							$portfolio = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => -1 ) );
							if ( $portfolio->have_posts() ) :
								while ( $portfolio->have_posts() ) : $portfolio->the_post();
								$technology = get_the_terms( $post->ID, 'technology' );
								if ( $technology && ! is_wp_error( $technology ) ) {
									$temp = array();
									foreach ( $technology as $tech ) {
										$temp[] = $tech->slug;
									}

									$tech_links = join( " ", $temp );
									$tech_slug = strtolower( $tech_links );
								} else {
									$tech_slug = '';
								}
								?>
								<div class="cbp-item <?php echo $tech_slug; ?>">
									<a href="<?php echo get_permalink(); ?>" class="cbp-caption"
									   data-title="<?php echo get_the_title(); ?>">
										<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
			                            	<div class="cbp-caption-defaultWrap">
												<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
											</div>
			                            <?php endif; ?>

										<div class="cbp-caption-activeWrap">
											<div class="cbp-l-caption-alignLeft">
												<div class="cbp-l-caption-body">
													<div class="cbp-l-caption-title"><?php echo get_the_title(); ?></div>
													<div class="cbp-l-caption-desc"></div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<?php
								endwhile;
							endif;
						?>
					</div>
				</div>


			</div>

</article><!-- #post-## -->

<?php

/**

 * Template part for displaying front page content in front-page.php.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package UnifyProvis

 */



?>

<!-- Intro Section -->

<section id="intro" class="intro-section">

	<div class="fullscreenbanner-container">

		<div class="fullscreenbanner">

			<ul>

				<!-- SLIDE 1 -->

				<li data-transition="curtain-1" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">

					<!-- MAIN IMAGE -->

					<img src="<?php echo get_template_directory_uri(); ?>/images/sliders/revolution/bg1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">



					<!-- LAYERS -->

					<div class="tp-caption rs-caption-1 sft start"

						data-x="center"

						data-hoffset="0"

						data-y="100"

						data-speed="800"

						data-start="2000"

						data-easing="Back.easeInOut"

						data-endspeed="300">

						WELCOME TO PROVIS TECHNOLOGIES

					</div>



					<!-- LAYER -->

					<div class="tp-caption rs-caption-2 sft"

						data-x="center"

						data-hoffset="0"

						data-y="200"

						data-speed="1000"

						data-start="3000"

						data-easing="Power4.easeOut"

						data-endspeed="300"

						data-endeasing="Power1.easeIn"

						data-captionhidden="off"

						style="z-index: 6">

						We create dynamic, reliable, eye-catching websites.<br>

						We minimize the gap between technology and its audience.

					</div>



					<!-- LAYER -->

					<div class="tp-caption rs-caption-3 sft"

						data-x="center"

						data-hoffset="0"

						data-y="360"

						data-speed="800"

						data-start="3500"

						data-easing="Power4.easeOut"

						data-endspeed="300"

						data-endeasing="Power1.easeIn"

						data-captionhidden="off"

						style="z-index: 6">

						<span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a></span>

						<span class="page-scroll"><a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a></span>

					</div>

				</li>



				<!-- SLIDE 2 -->

				<li data-transition="slideup" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">

					<!-- MAIN IMAGE -->

					<img src="<?php echo get_template_directory_uri(); ?>/images/sliders/revolution/bg2.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">



					<!-- LAYERS -->

					<div class="tp-caption rs-caption-1 sft start"

						data-x="center"

						data-hoffset="0"

						data-y="100"

						data-speed="800"

						data-start="1500"

						data-easing="Back.easeInOut"

						data-endspeed="300">

						DEDICATED ADVANCED TEAM

					</div>



					<!-- LAYER -->

					<div class="tp-caption rs-caption-2 sft"

						data-x="center"

						data-hoffset="0"

						data-y="200"

						data-speed="1000"

						data-start="2500"

						data-easing="Power4.easeOut"

						data-endspeed="300"

						data-endeasing="Power1.easeIn"

						data-captionhidden="off"

						style="z-index: 6">

						We are creative technology company providing<br>

						key digital services on web and mobile.

					</div>



					<!-- LAYER -->

					<div class="tp-caption rs-caption-3 sft"

						data-x="center"

						data-hoffset="0"

						data-y="360"

						data-speed="800"

						data-start="3500"

						data-easing="Power4.easeOut"

						data-endspeed="300"

						data-endeasing="Power1.easeIn"

						data-captionhidden="off"

						style="z-index: 6">

						<span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a></span>

						<span class="page-scroll"><a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a></span>

					</div>

				</li>



				<!-- SLIDE 3 -->

				<li data-transition="slideup" data-slotamount="5" data-masterspeed="700"  data-title="Slide 3">

					<!-- MAIN IMAGE -->

					<img src="<?php echo get_template_directory_uri(); ?>/images/sliders/revolution/bg3.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">



					<!-- LAYERS -->

					<div class="tp-caption rs-caption-1 sft start"

						data-x="center"

						data-hoffset="0"

						data-y="110"

						data-speed="800"

						data-start="1500"

						data-easing="Back.easeInOut"

						data-endspeed="300">

						WE DO THINGS DIFFERENTLY

					</div>



					<!-- LAYER -->

					<div class="tp-caption rs-caption-2 sfb"

						data-x="center"

						data-hoffset="0"

						data-y="210"

						data-speed="800"

						data-start="2500"

						data-easing="Power4.easeOut"

						data-endspeed="300"

						data-endeasing="Power1.easeIn"

						data-captionhidden="off"

						style="z-index: 6">

						Creative freedom matters user experience.<br>

						We provide custom tailored large enterprise applications.

					</div>



					<!-- LAYER -->

					<div class="tp-caption rs-caption-3 sfb"

						data-x="center"

						data-hoffset="0"

						data-y="370"

						data-speed="800"

						data-start="3500"

						data-easing="Power4.easeOut"

						data-endspeed="300"

						data-endeasing="Power1.easeIn"

						data-captionhidden="off"

						style="z-index: 6">

						<span class="page-scroll"><a href="#about" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a></span>

						<span class="page-scroll"><a href="#portfolio" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a></span>

					</div>

				</li>

			</ul>

			<div class="tp-bannertimer tp-bottom"></div>

			<div class="tp-dottedoverlay twoxtwo"></div>

		</div>

	</div>

</section>

<!-- End Intro Section -->



<!--  About Section -->

<section id="about" class="about-section section-first">

<?php

	$query = new WP_query( 'pagename=about' );

	// The Loop

	if( $query->have_posts() ) :

	    while( $query->have_posts() ): $query->the_post();

	        echo '<div class="entry-content">';

	        the_content();

	        echo '</div>';

	    endwhile;

	endif;



	wp_reset_postdata();

?>

</section>

<!--  About Section -->



<!-- Services Section -->

<section id="services" class="bg-grey">

<?php

	$query = new WP_query( 'pagename=services' );

	// The Loop

	if( $query->have_posts() ) :

	    while( $query->have_posts() ): $query->the_post();

	        echo '<div class="entry-content">';

	        the_content();

	        echo '</div>';

	    endwhile;

	endif;



	wp_reset_postdata();

?>

</section>

<!-- End Services Section -->



<!-- News Section -->

<section id="news" class="news-section">

	<div class="container content-lg">

		<div class="title-v1">

			<h1>Latest News</h1>

			<p>We are focusing on <strong>latest and upcoming development techniques.</strong> <br>
			Focused on serving our clients the <strong>best of bests</strong> keeping them ahead in business.</p>

		</div>



		<div class="row news-v1">

			<?php

			// Latest 3 Recent Blog Post

			$blog_query = new WP_Query( array( 'posts_per_page' => 2 ) );

			if ( $blog_query->have_posts() ) :

				while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

					<div class="col-md-4 md-margin-bottom-40">

						<div class="news-v1-in">

							<?php if ( has_post_thumbnail() ) : ?>

								<!-- Featured Image -->

								<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

							<?php endif; ?>

							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

							<?php the_excerpt(); ?>

							<?php unifyprovis_front_posted_on(); ?>

						</div>

					</div>

				<?php

				endwhile;

				wp_reset_postdata();

			endif;

			?>

		</div>

		<div class="call-action-v1">

				<div class="container">

					<div class="call-action-v1-box">

						<div class="call-action-v1-in">



						</div>

						<div class="call-action-v1-in inner-btn page-scroll">

							<a href="<?php echo home_url( '/news' ); ?>" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block"><?php echo __( 'View More News', 'unifyprovis' ); ?></a>

						</div>

					</div>

				</div>

			</div>

	</div>

</section>

<!-- End News Section -->



<!-- Portfolio Section -->

<section id="portfolio" class="about-section" style="padding-top: 0;">

	<div class="bg-grey">

		<div class="container content-lg">

			<div class="title-v1">

				<h1>Our Portfolio</h1>

				<p>Checkout the <strong>latest projects</strong> from our team. <br>
				We build a <strong>long-term relationship</strong> with our clients and focus on micro details.</p>

			</div>





			<?php

				$query = new WP_query( array( 'post_type' => 'portfolio', 'posts_per_page' => 3 ) );

				// The Loop

				if( $query->have_posts() ) : ?>

					<ul class="list-unstyled row portfolio-box-v1">

					<?php while( $query->have_posts() ): $query->the_post(); ?>

						<li class="col-sm-4">

							<?php if ( has_post_thumbnail() ) : ?>

							<img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">

							<?php endif; ?>



							<div class="portfolio-box-v1-in">

								<h3><?php echo get_the_title(); ?></h3>

								<a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="<?php echo get_permalink(); ?>"><?php echo __( 'Read More', 'unifyprovis' ); ?></a>

							</div>

						</li>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					</ul>

				<?php endif; ?>



			<div class="call-action-v1">

				<div class="container">

					<div class="call-action-v1-box">

						<div class="call-action-v1-in inner-btn page-scroll">

							<a href="<?php echo home_url( '/portfolio' ); ?>" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block"><?php echo __( 'View Our Portfolio', 'unifyprovis' ); ?></a>

						</div>

					</div>

				</div>

			</div>



		</div>



		<div class="clients-section parallaxBg">

			<div class="container">

				<?php

					$query = new WP_query( 'pagename=clients' );

					// The Loop

					if( $query->have_posts() ) :

					    while( $query->have_posts() ): $query->the_post();

							echo '<div class="title-v1">';

								echo '<h2>'.get_the_title().'</h2>';

							echo '</div>';

					        echo '<div class="entry-content">';

					        the_content();

					        echo '</div>';

					    endwhile;

						wp_reset_postdata();

					endif;



				?>

			</div>

		</div>

	</div>



	<div class="testimonials-v3">

		<div class="container">

			<div class="row">

				<div class="col-md-8 col-md-offset-2">



					<?php

						$query = new WP_query( array( 'post_type' => 'testimonial') );

						// The Loop

						if( $query->have_posts() ) : ?>

							<ul class="list-unstyled owl-ts-v1">

							<?php while( $query->have_posts() ): $query->the_post(); ?>

								<li class="item">

									<?php if ( has_post_thumbnail() ) : ?>

									<img class="rounded-x img-bordered" src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">

									<?php endif; ?>



									<div class="testimonials-v3-title">

										<p><?php echo get_the_title(); ?></p>
										<?php $testimonial_custom_field = get_post_custom_values( 'website' ); ?>
										<span><a href="<?php echo $testimonial_custom_field[0]; ?>" target="_blank"><?php echo $testimonial_custom_field[0]; ?></a></span>

									</div>

									<p><?php echo get_the_content(); ?></p>

								</li>

								<?php endwhile; ?>

								<?php wp_reset_postdata(); ?>

							</ul>

						<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</section>

<!-- End Portfolio Section -->


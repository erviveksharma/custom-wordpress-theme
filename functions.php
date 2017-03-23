<?php
/**
 * UnifyProvis functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UnifyProvis
 */

if ( ! function_exists( 'unifyprovis_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function unifyprovis_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on UnifyProvis, use a find and replace
	 * to change 'unifyprovis' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'unifyprovis', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Main Menu', 'unifyprovis' ),
		'top' => esc_html__( 'Top Menu', 'unifyprovis' ),
		'front' => esc_html__( 'Front Menu', 'unifyprovis' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'unifyprovis_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'unifyprovis_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unifyprovis_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'unifyprovis_content_width', 640 );
}
add_action( 'after_setup_theme', 'unifyprovis_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unifyprovis_widgets_init() {
	$class = '';
	if ( ! is_single() ) {
		$class = ' bg-color-light';
	} else {
		$class = ' monty';
	}

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'unifyprovis' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'unifyprovis' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="headline-v2' . $class . '"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
}
add_action( 'widgets_init', 'unifyprovis_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function unifyprovis_scripts() {
	wp_enqueue_style( 'unifyprovis-webfont-style', '//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin', array(), '20161007' );
	wp_enqueue_style( 'unifyprovis-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '20161007' );
	wp_enqueue_style( 'unifyprovis-font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '20161007' );
	wp_enqueue_style( 'unifyprovis-lineicons-style', get_template_directory_uri() . '/css/line-icons.css', array() );
	wp_enqueue_style( 'unifyprovis-style', get_stylesheet_uri() );

	// Style.css
	wp_enqueue_style( 'unifyprovis-main-style', get_template_directory_uri() . '/css/style.css', array( 'unifyprovis-webfont-style', 'unifyprovis-bootstrap-style', 'unifyprovis-font-awesome-style', 'unifyprovis-style' ), '20161009' );


	if ( is_front_page() ) {
		wp_enqueue_style( 'unifyprovis-main-one-style', get_template_directory_uri() . '/css/one.style.css' );
		wp_enqueue_style( 'unifyprovis-footer-one-style', get_template_directory_uri() . '/css/footers/one.footer-v7.css' );
		wp_enqueue_style( 'unifyprovis-owl-carousel-style', get_template_directory_uri() . '/css/owl-carousel/owl.carousel.css' );
		wp_enqueue_style( 'unifyprovis-themepunch-revolution-settings-style', get_template_directory_uri() . '/css/revolution-slider/rs-plugin/css/settings.css' );
		wp_enqueue_style( 'unifyprovis-themepunch-revolution-settings-ie8-style', get_template_directory_uri() . '/css/revolution-slider/rs-plugin/css/settings-ie8.css' );
		wp_style_add_data( 'unifyprovis-themepunch-revolution-settings-ie8-style', 'conditional', 'lt IE 9' );
		wp_enqueue_style( 'unifyprovis-front-color-scheme-style', get_template_directory_uri() . '/css/one.provis.css' );
	} else {
		wp_enqueue_style( 'unifyprovis-main-style', get_template_directory_uri() . '/css/style.css' );
		wp_enqueue_style( 'unifyprovis-footer-style', get_template_directory_uri() . '/css/footers/footer-v1.css' );
		wp_enqueue_style( 'unifyprovis-color-scheme-style', get_template_directory_uri() . '/css/provis.css' );
	}
	wp_enqueue_style( 'unifyprovis-header-style', get_template_directory_uri() . '/css/headers/header-default.css' );

	wp_enqueue_style( 'unifyprovis-sky-forms-style', get_template_directory_uri() . '/css/sky-forms.css' );
	wp_enqueue_style( 'unifyprovis-portfolio-style', get_template_directory_uri() . '/css/cubeportfolio.min.css' );
	wp_enqueue_style( 'unifyprovis-custom-sky-forms-style', get_template_directory_uri() . '/css/custom-sky-forms.css', array( 'unifyprovis-sky-forms-style' ) );
	wp_enqueue_style( 'unifyprovis-page-404-error-style', get_template_directory_uri() . '/css/page_404_error.css' );
	wp_enqueue_style( 'unifyprovis-custom-style', get_template_directory_uri() . '/css/custom.css' );


	wp_enqueue_script( 'unifyprovis-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '20161007', true );
	wp_enqueue_script( 'unifyprovis-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'unifyprovis-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_front_page() ) {
		wp_enqueue_script( 'unifyprovis-owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '20161007', true );
		wp_enqueue_script( 'unifyprovis-themepunch-revolution-script', get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js', array( 'jquery' ), '20161007', true );
		wp_enqueue_script( 'unifyprovis-themepunch-tools-script', get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js', array( 'jquery' ), '20161007', true );
		wp_enqueue_script( 'unifyprovis-jquery-easing-script', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery' ), '20161007', true );
		wp_enqueue_script( 'unifyprovis-jquery-parallax-script', get_template_directory_uri() . '/js/jquery.parallax.js', array( 'jquery' ), '20161007', true );
		wp_enqueue_script( 'unifyprovis-smooth-scroll-script', get_template_directory_uri() . '/js/smoothScroll.js', array( 'jquery' ), '20161007', true );
		wp_enqueue_script( 'unifyprovis-one-page-script', get_template_directory_uri() . '/js/one.app.js', array(), '20161007', true );
	}

	wp_enqueue_script( 'unifyprovis-portfolio-script', get_template_directory_uri() . '/js/jquery.cubeportfolio.min.js', array( 'jquery' ), '20161007', true );
	wp_enqueue_script( 'unifyprovis-main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'unifyprovis-bootstrap-script', 'unifyprovis-portfolio-script' ), '20161007', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'unifyprovis_scripts' );

/**
 * Filter the excerpt "[...]" string.
 *
 * @param string $more "Read More" excerpt string.
 * @return string modified "read more" excerpt string.
 */
function unifyprovis_excerpt_more( $more ) {
	return ' ...';
}
add_action( 'excerpt_more', 'unifyprovis_excerpt_more' );

/**
 * Filter the excerpt length to 20 character.
 *
 * @param int $length Excerpt length
 * @return in modified excerpt length
 */
function unifyprovis_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'unifyprovis_excerpt_length' );

function unifyprovis_list_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

			<div class="row blog-comments margin-bottom-30">
				<div class="col-sm-2 sm-margin-bottom-40">
					<?php echo get_avatar( get_comment_author_email( $comment->comment_ID ), 200 ); ?>
				</div>
				<div class="col-sm-10">
					<div class="comments-itself">
						<h4>
							<?php printf( __( '%s', 'unifyprovis' ), get_comment_author_link() ); ?>
							<span><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?> / <a href="#"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a><?php edit_comment_link( __( 'Edit', 'unifyprovis' ), ' / ' ); ?> </span>
						</h4>

						<?php if ($comment->comment_approved == '0') : ?>
			                <em class="aweting"><?php _e('Your comment is awaiting moderation.'); ?></em><br />
			            <?php endif; ?>

						<?php comment_text(); ?>
					</div>
				</div>
			</div>
	<?php
}


function unifyprovis_post_author_box() {
	global $post;
	$author_details = '';
	if ( is_single() && isset( $post->post_author ) ) {

		// Author Name
		$author_display_name = get_the_author_meta( 'display_name', $post->post_author );

		if ( empty( $author_display_name ) )
			$author_display_name = get_the_author_meta( 'nickname', $post->post_author );

		// Author Biography
		$author_description = get_the_author_meta( 'user_description', $post->post_author );
		// Author Posts url
		$author_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));

		$author_details .= '<div class="blog-author margin-bottom-30">';
			// Author Image
			$author_details .= get_avatar( get_the_author_meta('user_email'), 440 );
			$author_details .= '<div class="blog-author-desc">';
				$author_details .= '<div class="overflow-h">';
				$author_details .= '<h4><a href="' . $author_posts . '">' . $author_display_name . '</a></h4>';
				$author_details .= '</div>';
				$author_details .= '<p>' . nl2br( $author_description ) . '</p>';
			$author_details .= '</div>';
		$author_details .= '</div>';
	}

	echo $author_details;
}

// Allow HTML in author bio section
remove_filter('pre_user_description', 'wp_filter_kses');

/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 */
function unifyprovis_get_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="input-group">
    	<label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    	<input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s">
    	<span class="input-group-btn">
			<button class="btn-u" type="submit" id="searchsubmit">'. __( 'Search' ) .'</button>
		</span>
    </div>
    </form>';

    return $form;
}
add_filter( 'get_search_form', 'unifyprovis_get_search_form' );


/**
 * Remove Empty <p> tags in WordPress Editor.
 */
remove_filter('the_content', 'wpautop');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

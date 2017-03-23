<?php
/**
 * The template for displaying Front Single Page Website.
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnifyProvis
 */

get_header( 'front' ); ?>

    <?php
    while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'front-page' );

    endwhile; // End of the loop.
    ?>

<?php
get_footer( 'front' );

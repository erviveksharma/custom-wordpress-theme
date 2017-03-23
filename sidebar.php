<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnifyProvis
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php if ( is_single() || is_page() ) : ?>
    <aside id="secondary" class="widget-area single_widget_area" role="complementary">
<?php else : ?>
    <aside id="secondary" class="widget-area" role="complementary">
<?php endif; ?>
    <div class="col-md-3">
	   <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside><!-- #secondary -->

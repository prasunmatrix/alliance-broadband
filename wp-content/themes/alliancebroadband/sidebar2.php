<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'primary-widget-area' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Primary Widget Area', 'twentyseventeen' ); ?>">
	<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</aside><!-- #secondary -->

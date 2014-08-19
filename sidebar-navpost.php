<?php
/**
 * The Content Sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>
<div class="nav-menu" role="navegation">
	<?php dynamic_sidebar( 'sidebar-4' ); ?>
</div><!-- #content-sidebar -->

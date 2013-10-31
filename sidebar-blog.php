<?php
/**
 * Right Sidebar displayed on post and blog templates.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
<div class="col-md-4">
	<?php if ( function_exists( 'dynamic_sidebar' ) ) :
		dynamic_sidebar( 'sidebar-posts' );
	endif; ?>
</div>
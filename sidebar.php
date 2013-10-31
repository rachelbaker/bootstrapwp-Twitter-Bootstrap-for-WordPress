<?php
/**
 * The Right Sidebar displayed on page templates.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
<div class="col-md-4">
	<?php if ( function_exists( 'dynamic_sidebar' ) ) :
		dynamic_sidebar( 'sidebar-page' );
	endif; ?>
</div>
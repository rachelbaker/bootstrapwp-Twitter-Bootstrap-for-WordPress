<?php
/**
 * Description: The partial for displaying a template's breadcrumbs.
 *
 * @package    WordPress
 * @subpackage BootstrapWP
 */
if ( function_exists( 'bootstrapwp_breadcrumbs' ) && ! is_home() || ! is_front_page() ) : ?>

	<div class="row">
		<div class="col-md-12">
			<?php bootstrapwp_breadcrumbs(); ?>
		</div>
	</div>

<?php endif; // end breadcrumbs ?>
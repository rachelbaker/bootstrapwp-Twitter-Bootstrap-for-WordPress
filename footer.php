<?php
/**
 * Default Footer
 *
 * @package    WordPress
 * @subpackage BootstrapWP
 */
?>
<footer>
	<div class="container">
		<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo esc_attr( date( 'Y' ) ); ?></p>
		<?php
		if ( function_exists( 'dynamic_sidebar' ) ) {
			dynamic_sidebar( "footer-content" );
		} ?>
	</div>
	<!-- /container -->
</footer>
<?php wp_footer(); ?>
</body>
</html>
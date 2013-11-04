<?php
/**
 * Description: Default Footer
 *
 * @package    WordPress
 * @subpackage BootstrapWP
 */
?>
		<!-- End Template Content. Begin Footer. -->
		<footer>
			<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo esc_attr( date( 'Y' ) ); ?></p>

			<?php if ( function_exists( 'dynamic_sidebar' ) ) :
				dynamic_sidebar( "footer-content" );
			endif; ?>

		</footer>
	</div>

	<?php wp_footer(); ?>

	</body>
</html>
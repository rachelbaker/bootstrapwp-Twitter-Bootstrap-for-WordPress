<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: May 4, 2013
 */
?>
    <!-- End Template Content -->
      <footer>
<div class="container">
      <p class="pull-right"><a href="#"><?php _e( 'Back to top', 'bootstrapwp' ); ?></a></p>
        <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
          <?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");
?>
    </div> <!-- /container -->
       </footer>
<?php wp_footer(); ?>

  </body>
</html>
<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>
    <!-- End Template Content -->
      <footer>
<div class="container">
      <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
          <?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");
?>
    </div> <!-- /container -->
       </footer>
<?php wp_footer(); ?>

  </body>
</html>
<?php
/**
 * Template Name: Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: January 20, 2012
 */
?>


      <footer>

      <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
      </footer>

    </div> <!-- /container -->
<?php wp_footer(); ?> 
<script type="text/javascript">
// Adding the class "dropdown" to li elements with submenus  //	
jQuery(document).ready(function(){
jQuery("ul.sub-menu").parent().addClass("dropdown");
jQuery("ul#main-menu li.dropdown a").addClass("dropdown-toggle");
jQuery("ul.sub-menu li a").removeClass("dropdown-toggle"); 
  });
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
 // Don't FORGET: replace all $ with jQuery to prevent conflicts //
jQuery('a.dropdown-toggle')
.attr('data-toggle', 'dropdown');
  });
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
 jQuery('#navbar').scrollspy()
  jQuery('.subnav').scrollspy()
  });
</script>
  <script type="text/javascript">
jQuery(document).ready(function(){
 // Loaded for javascript Demo page - I prefer it when demos actually work, don't you?  //	
 // Don't FORGET: replace all $ with jQuery to prevent conflicts //
jQuery(function () {
        // tooltip demo
        jQuery('.tooltip-demo.well').tooltip({
          selector: "a[rel=tooltip]"
        })
        jQuery('.tooltip-test').tooltip()

        // popover demo
        jQuery("a[rel=popover]")
          .popover()
          .click(function(e) {
            e.preventDefault()
          })

        // button state demo
        jQuery('#fat-btn')
          .click(function () {
            var btn = $(this)
            btn.button('loading')
            setTimeout(function () {
              btn.button('reset')
            }, 3000)
          })

        // carousel demo
        jQuery('#myCarousel').carousel()
      })
  });
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
 // Don't FORGET: replace all $ with jQuery to prevent conflicts //
 jQuery(function () {
        jQuery(".tablesorter-example").tablesorter({ sortList: [[1,0]] });
        jQuery('.dropdown-toggle').dropdown();
      })
  });
</script>

  </body>
</html>
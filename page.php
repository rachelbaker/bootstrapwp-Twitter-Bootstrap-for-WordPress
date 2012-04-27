<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
$options = get_option( 'bootstrapwp_theme_options' );
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
   </div><!--/.container -->
   </div><!--/.row -->
   <div class="container">

      
 <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
      </header>
         
        <div class="row content">
        	<?php if($options['sidebar_pos'] == 'left') get_sidebar();  ?>
<div class="span8">

            <?php the_content();?>
<?php endwhile; // end of the loop. ?>
          </div><!-- /.span8 -->
          
          <?php if($options['sidebar_pos'] != 'left') get_sidebar();  ?>
		</div><!-- /.row .content -->

<?php get_footer(); ?>
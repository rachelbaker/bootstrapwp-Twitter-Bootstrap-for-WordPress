<?php
/**
 * Template Name: Home Hero Template with 3 widget areas
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
<div class="jumbotron masthead">
    <div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title();?></h1>
      <?php the_content();?>
    </div>
</div>

<?php endwhile; endif; ?>
<div class="container">
  <div class="marketing">
  <div class="row-fluid">
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-left" );
?>
    </div>
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-middle" );
?>
    </div>
    <div class="span4">
      <?php
if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-right" );
?>
    </div>
  </div>
</div><!-- /.marketing -->
</div>
<?php get_footer();?>

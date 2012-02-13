<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.6
 */

get_header(); ?>
<?php query_posts( array( 'posts_per_page' => 10, 'paged' => get_query_var('paged') ) );
if (have_posts() ) ;?>
  <div class="row">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
   </div><!--/.container -->
   </div><!--/.row -->
   <div class="container">
<header class="jumbotron subhead" id="overview">
						<h1><?php
							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date() . '</span>' );
							elseif ( is_month() ) :
								printf( __( 'Monthly Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
							elseif ( is_year() ) :
								printf( __( 'Yearly Archives: %s', 'bootstrapwp' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
							else :
								_e( 'Archives', 'bootstrapwp' );
							endif;
						?>
					</h1>
				</header>

				<?php rewind_posts(); ?>

				
      <div class="row content">
<div class="span8">
	<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
				<p class="meta"><?php echo bootstrapwp_posted_on();?></p>
             <div class="row">              
                <div class="span2">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php echo catch_that_image();?></a>
                </div><!-- /.span2 -->
                <div class="span6">
                 <?php the_excerpt();?>
                </div><!-- /.span6 -->
             </div><!-- /.row -->   
                <hr />  

				<?php endwhile; ?>
 <?php bootstrapwp_content_nav('nav-below');?>
			
 </div><!-- /.span8 -->
<?php get_sidebar('blog'); ?>

<?php get_footer(); ?>
<?php
/**
 *
 * Search Template
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
$options = get_option( 'bootstrapwp_theme_options' );
get_header(); ?>
 <div class="container">
<?php if ( have_posts() ) : ?>
  
    <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php printf( __( 'Search Results for: %s', 'bootstrapwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
       
      </header>
			 <div class="row content">
			 	<?php if($options['sidebar_pos'] == 'left') get_sidebar();  ?>
<div class="span8">
					<?php while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h2> <?php the_title();?></h2></a>
<p><?php the_excerpt();?></p>
<hr />

				<?php endwhile; ?>
			<?php else : ?>
 <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php _e( 'No Results Found', 'bootstrapwp' ); ?></h1>
      <p class="lead"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.', 'bootstrapwp' ); ?></p>
      </header>
			 <div class="row content">
			 	<?php if($options['sidebar_pos'] == 'left') get_sidebar();  ?>
<div class="span8">
					

<div class="well">
					<?php get_search_form(); ?>

</div><!--/.well -->
<?php endif ;?>
				<?php bootstrapwp_content_nav( 'nav-below' ); ?>

			

		</div><!--/.span8 -->

<?php if($options['sidebar_pos'] != 'left') get_sidebar();  ?>
</div><!-- /.row .content -->
<?php get_footer(); ?>
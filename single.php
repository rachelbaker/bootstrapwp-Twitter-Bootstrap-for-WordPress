<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container">

	<?php if ( function_exists( 'bootstrapwp_breadcrumbs' ) ) : ?>
		<?php bootstrapwp_breadcrumbs(); ?>
	<?php endif; // end breadcrumbs ?>

	<div class="row">
    	<div class="col-md-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<div <?php post_class(); ?>>
					<div class="page-header">
				        <h1><?php the_title();?></h1>
				    </div>

	            	<p class="meta"><?php echo bootstrapwp_posted_on();?></p>

	            	<div class="entry-content">
	            		<?php the_content(); ?>
            		</div>

	            	<?php edit_post_link(__('Edit', 'bootstrapwp'), '<button class="btn btn-default">', '</button>'); ?>
            		<hr />

	            	<?php the_tags('<p>Tags: ', ', ', '</p>'); ?>

	            </div>

		        <?php comments_template(); ?>
	        <?php endwhile; // end of the loop. ?>



		    <?php bootstrapwp_content_nav( 'nav-below' ); ?>

		</div>

    	<?php get_sidebar('blog'); ?>

    </div>
</div>

<?php get_footer(); ?>
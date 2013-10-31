col-md-<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container">
	<?php if ( function_exists( 'bootstrapwp_breadcrumbs' ) && ! is_home() ) : ?>
    	<div class="row">
        	<div class="col-md-12">
            	<?php bootstrapwp_breadcrumbs(); ?>
	        </div>
	    </div>
    <?php endif; // end breadcrumbs ?>

    <div class="row">
        <div class="col-md-8">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                        <?php the_title();?>
                    </a></h2>
                    <p class="meta">
                        <?php echo bootstrapwp_posted_on();?>
                    </p>

                    <div class="entry-content">
                        <?php // Post thumbnail conditional display.
                        if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                            <div class="pull-right">
                                <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                                    <?php echo bootstrapwp_autoset_featured_img(); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php the_content(); ?>

                    </div>

                    <hr/>
                </div><!-- /.post_class -->
            <?php endwhile; endif; ?>

            <?php bootstrapwp_content_nav('nav-below');?>
        </div>

	    <?php get_sidebar('blog'); ?>

	</div>
<?php get_footer(); ?>
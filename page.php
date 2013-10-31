<?php
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div><!--/.col-md-12 -->
    </div><!--/.row -->

    <div class="page-header">
        <h1><?php the_title();?></h1>
    </div>

  <div class="row content">
    <div class="col-md-8">
        <?php the_content(); ?>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- /.col-md-8 -->

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
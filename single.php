<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <div class="container">
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div><!--/.span12 -->
    </div><!--/.row -->

    <header class="post-title">
        <h1><?php the_title();?></h1>
    </header>

    <div class="row content">
        <div class="span8">
             <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_content(); ?>
            <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            <?php endwhile; // end of the loop. ?>
            <hr/>

            <?php comments_template(); ?>
            <?php bootstrapwp_content_nav('nav-below'); ?>
        </div><!-- /.span8 -->

    <?php get_sidebar('blog'); ?>
    <?php get_footer(); ?>
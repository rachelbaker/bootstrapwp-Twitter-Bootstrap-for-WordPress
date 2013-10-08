<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div>
    </div>

   <div class="row content">
       <div class="span8">

            <header class="page-title">
                <h1><?php _e('This is Embarrassing', 'bootstrapwp'); ?></h1>
            </header>

            <p class="lead"><?php _e(
                'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.',
                'bootstrapwp'
            ); ?></p>

           <div class="well">
               <?php get_search_form(); ?>
           </div>

           <div class="row">
               <div class="span4">
                   <h2>All Pages</h2>
                   <?php wp_page_menu(); ?>
               </div>
               <!--/.span4 -->
               <div class="span4">
                   <?php the_widget('WP_Widget_Recent_Posts'); ?>

                   <h2><?php _e('Most Used Categories', 'bootstrapwp'); ?></h2>
                   <ul>
                       <?php wp_list_categories(
                       array(
                           'orderby' => 'count',
                           'order' => 'DESC',
                           'show_count' => 1,
                           'title_li' => '',
                           'number' => 10
                       )
                   ); ?>
                   </ul>

               </div>
               <!--/.span4 -->
           </div>
           <!--/.row -->
       </div>

    <?php get_sidebar(); ?>
    <?php get_footer();

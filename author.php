<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<?php if (have_posts()) :
    // Queue the first post.
    the_post(); ?>

	<div class="container">
		<div class="row">
            <div class="span12">
                <?php if (function_exists('bootstrapwp_breadcrumbs')) {
                bootstrapwp_breadcrumbs();
            } ?>
            </div>
        </div><!--/.row -->

		<div class="row content">
			<div class="span8">
                <header class="subhead" id="overview">
                    <h1 class="page-title author"><?php printf(
                        __('Author Archives: %s', 'bootstrapwp'),
                        '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url(
                            get_the_author_meta("ID")
                        ) . '" title="' . esc_attr(get_the_author()) . '" rel="me">' . get_the_author() . '</a></span>'
                    ); ?></h1>
                </header>
                <?php
                // Rewind the loop back
                    rewind_posts();
                ?>

                <?php while (have_posts()) : the_post(); ?>
                    <div <?php post_class(); ?>>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>

                        <p class="meta"><?php echo bootstrapwp_posted_on();?></p>

                        <div class="row">
                            <?php // Post thumbnail conditional display.
                            if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                                <div class="span2">
                                    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                                        <?php echo bootstrapwp_autoset_featured_img(); ?>
                                    </a>
                                </div>
                                <div class="span6">
                            <?php else : ?>
                                <div class="span8">
                            <?php endif; ?>
                                    <?php the_excerpt(); ?>
                                </div>
                        </div><!-- /.row -->

                        <hr/>
                    </div><!-- /.post_class -->
                   <?php endwhile; ?>

                   <?php bootstrapwp_content_nav('nav-below');?>

               <?php endif; ?>
		</div>

    <?php get_sidebar('blog'); ?>
    <?php get_footer(); ?>
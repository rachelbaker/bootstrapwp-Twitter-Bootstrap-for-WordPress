<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package    WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<?php get_template_part( 'partials/breadcrumbs' ); ?>

<div class="row">
	<div class="col-md-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'partials/loop' ); ?>

		<?php endwhile; endif; ?>

		<?php bootstrapwp_content_nav( 'nav-below' ); ?>

	</div>

	<?php get_sidebar( 'blog' ); ?>

</div>
<?php get_footer(); ?>
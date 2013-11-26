<?php
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container">

	<?php get_template_part( 'partials/breadcrumbs' ); ?>

	<div class="row">
		<div class="col-md-8">

			<?php while ( have_posts() ) : the_post(); ?>

				<div <?php post_class(); ?>>
					<div class="page-header">
						<h1><?php the_title();?></h1>
					</div>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<?php edit_post_link(__('Edit', 'bootstrapwp'), '<button class="btn btn-default">', '</button>'); ?>

					<hr />

					<?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>

					<?php if ( comments_open() || get_comments_number() ) :
						// display comments template.
						comments_template();
					endif; ?>

				</div>

			<?php endwhile; // end of the loop. ?>

		</div>

		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>

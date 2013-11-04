<?php
/**
  * Description: The partial for displaying a template's breadcrumbs.
 *
 * @package    WordPress
 * @subpackage BootstrapWP
 */
?>
<div <?php post_class(); ?>>
	<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php the_title(); ?>
	</a></h2>

	<p class="meta">
		<?php echo bootstrapwp_posted_on(); ?>
	</p>

	<div class="entry-content">
		<?php // Post thumbnail conditional display.
			if ( bootstrapwp_autoset_featured_img() !== false ) : ?>

				<div class="pull-right">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( 'echo=0' ); ?>">
						<?php echo bootstrapwp_autoset_featured_img(); ?>
					</a>
				</div>

		<?php endif; ?>

		<?php the_content(); ?>

	</div>
	<hr />
</div>
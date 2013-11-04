<?php
/**
 * Default Page Header
 *
 * @package    WordPress
 * @subpackage BootstrapWP
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/ico/favicon.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>

				<?php
					wp_nav_menu(
						array(
							'menu'            => 'main-menu',
							'container_class' => 'collapse navbar-collapse',
							'menu_class'      => 'nav navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'walker'          => new Bootstrapwp_Walker_Nav_Menu()
						)
					);
				?>

			</div>
		</div>
		<div class="container">
		<!-- End Header. Begin Template Content -->
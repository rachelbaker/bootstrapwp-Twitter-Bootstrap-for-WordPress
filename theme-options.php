<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'bootstrapwp_options', 'bootstrapwp_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'bootstrapwp_theme' ), __( 'Theme Options', 'bootstrapwp_theme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

$sidebar_pos_options = array(
	'right' => array(
		'value' => 'right',
		'label' => __( 'Right', 'bootstrapwp_theme' )
	),
	'left' => array(
		'value' => 'left',
		'label' => __( 'Left', 'bootstrapwp_theme' )
	),
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $sidebar_pos_options; 

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
		
	$options = get_option( 'bootstrapwp_theme_options' );
		
	if ( !isset($options['sidebar_pos']) || is_null($options['sidebar_pos']) || $options['sidebar_pos'] == '')
		$options['sidebar_pos'] = 'right';

 	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'bootstrapwp_theme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'bootstrapwp_theme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'bootstrapwp_options' ); ?>
			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Show sidebar on left or right', 'bootstrapwp_theme' ); ?></th>
					<td>
						<fieldset><legend class="screen-reader-text"><span><?php _e( 'Show sidebar on left or right', 'bootstrapwp_theme' ); ?></span></legend>
						<?php 
							foreach ( $sidebar_pos_options as $option ) {
								$checked = ( $options['sidebar_pos'] == $option['value'] ) ?  "checked=\"checked\"" : '';
								?>
								<label class="description"><input type="radio" name="bootstrapwp_theme_options[sidebar_pos]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> /> <?php echo $option['label']; ?></label><br />
								<?php
							}
						?>
						</fieldset>
					</td>
				</tr>

			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'bootstrapwp_theme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $sidebar_pos_options;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['sidebar_pos'] ) )
		$input['sidebar_pos'] = 'right';
	if ( ! array_key_exists( $input['sidebar_pos'], $sidebar_pos_options ) )
		$input['sidebar_pos'] = 'right';


	return $input;
}
<?php
     /**
     * class Bootstrap_Walker_Nav_Menu()
     *
     * Extending Walker_Nav_Menu to modify class assigned to submenu ul element
     *
     * @author Rachel Baker
     * @author Mike Bijon (updates & PHP strict standards only)
     * 
     **/
class Bootstrapwp_Walker_Nav_Menu extends Walker_Nav_Menu {

	function __construct() {
		
		add_filter( 'wp_nav_menu_args', array( __CLASS__, 'items_wrap' ) );
		
	}
	
	/**
	 * Called in constructor to override WP built-in menu formatting
	 *
	 *
	 * @param 	array		$args
	 * @return 	array 		$args	
	 * 
	 */
	static function items_wrap( $args ) {
		
		$args['container'] = '';
		
		// Prefer seeing blank over seeing default Page menu in odd places
		$args['fallback_cb'] = '__return_false';
		
		return $args;
	
	}
	
	/**
	 * Opening tag for menu list before anything is added
	 *
	 *
	 * @param array reference		&$output	Reference to class' $output
	 * @param int					$depth		Depth of menu (if nested)
	 * @param array					$args		Class args, unused here
	 *
	 * @return string $indent
	 * @return array by-reference	&$output
	 *
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		
		$indent = str_repeat( '\t', $depth );
		$output .= '\n$indent<ul class=\"dropdown-menu\">\n';
		
	}

}
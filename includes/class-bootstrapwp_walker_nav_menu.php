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


	/**
	 * Opening tag for menu list before anything is added
	 *
	 *
	 * @param       array  reference       &$output    Reference to class' $output
	 * @param int   $depth Depth of menu (if nested)
	 * @param array $args  Class args, unused here
	 *
	 * @return string $indent
	 * @return array by-reference   &$output
	 *
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {

		$indent = str_repeat( "\t", $depth );

		if ( $depth == 0 ) {

			$output .= "\n$indent<ul class=\"dropdown-menu\">\n";

		} else {

			$output .= "\n$indent<ul class=\"dropdown-submenu\">\n";
		}
	}

	/**
	 * @see   Walker::end_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of page. Used for padding.
	 */
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
	}

	/**
	 * Start the element output.
	 *
	 * @see   Walker::start_el()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 * @param int    $id     Current item ID.
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filter the CSS class(es) applied to a menu item's <li>.
		 *
		 * @since 3.0.0
		 *
		 * @param array  $classes The CSS classes that are applied to the menu item's <li>.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of arguments. @see wp_nav_menu()
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filter the ID applied to a menu item's <li>.
		 *
		 * @since 3.0.1
		 *
		 * @param        string The ID that is applied to the menu item's <li>.
		 * @param object $item  The current menu item.
		 * @param array  $args  An array of arguments. @see wp_nav_menu()
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';



		/**
		 * Filter the HTML attributes applied to a menu item's <a>.
		 *
		 * @since 3.6.0
		 *
		 * @param array  $atts   {
		 *                       The HTML attributes applied to the menu item's <a>, empty strings are ignored.
		 *
		 * @type string  $title  The title attribute.
		 * @type string  $target The target attribute.
		 * @type string  $rel    The rel attribute.
		 * @type string  $href   The href attribute.
		 * }
		 *
		 * @param object $item   The current menu item.
		 * @param array  $args   An array of arguments. @see wp_nav_menu()
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

		/**
		 * Add anchor attributes for navigation dropdown menus.
		 * Checks if li element contains dropdown class added in display_element method.
		 */
		if ( in_array( 'dropdown', $classes ) ) {
			$atts['data-toggle'] = 'dropdown';
			$atts['data-target'] = '#';
			$atts['class'] = 'dropdown-toggle';
		}

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		//duplicate_hook
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filter a menu item's starting output.
		 *
		 * The menu item's starting output only includes $args->before, the opening <a>,
		 * the menu item's title, the closing </a>, and $args->after. Currently, there is
		 * no filter for modifying the opening and closing <li> for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string $item_output The menu item's starting HTML output.
		 * @param object $item        Menu item data object.
		 * @param int    $depth       Depth of menu item. Used for padding.
		 * @param array  $args        An array of arguments. @see wp_nav_menu()
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @see   Walker::end_el()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Page data object. Not used.
	 * @param int    $depth  Depth of page. Not Used.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
	}

	 function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
	        if ( !$element )
	 		return;

	 	$id_field = $this->db_fields['id'];

	 	//display this element
	 	if ( isset( $args[0] ) && is_array( $args[0] ) )
	 		$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );

	 	    //Adds the 'dropdown' class to the current item if it has children
	        if( ! empty( $children_elements[$element->$id_field] ) ) {
	            array_push( $element->classes,'dropdown' );
	        }

	 	$cb_args = array_merge( array(&$output, $element, $depth), $args);
	 	call_user_func_array(array($this, 'start_el'), $cb_args);

	 	$id = $element->$id_field;

	 	// descend only when the depth is right and there are childrens for this element
	 	if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

	 		foreach( $children_elements[ $id ] as $child ){

	 			if ( !isset($newlevel) ) {
	 				$newlevel = true;
	 				//start the child delimiter
	 				$cb_args = array_merge( array(&$output, $depth), $args);
	 				call_user_func_array(array($this, 'start_lvl'), $cb_args);
	 			}
	 			$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
	 		}
	 		unset( $children_elements[ $id ] );
	 	}

	 	if ( isset($newlevel) && $newlevel ){
	 		//end the child delimiter
	 		$cb_args = array_merge( array(&$output, $depth), $args);
	 		call_user_func_array(array($this, 'end_lvl'), $cb_args);
	 	}

	 	//end this element
	 	$cb_args = array_merge( array(&$output, $element, $depth), $args);
	 	call_user_func_array(array($this, 'end_el'), $cb_args);
	 }

}
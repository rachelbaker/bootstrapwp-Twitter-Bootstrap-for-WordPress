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
     * @param array reference       &$output    Reference to class' $output
     * @param int                   $depth      Depth of menu (if nested)
     * @param array                 $args       Class args, unused here
     *
     * @return string $indent
     * @return array by-reference   &$output
     *
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {

        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    /**
     * @see Walker::end_lvl()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

}
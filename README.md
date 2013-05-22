BootstrapWP - Bootstrap Theme for WordPress
=================

![image](http://f.cl.ly/items/0o0N0e1k2X0B0l0r0n1P/BootstrapWP-Bootstrap-starter-theme.jpg)


Bootstrap is a responsive front-end toolkit from Twitter designed to kickstart web development, complete with core HTML, CSS, and JS for grids, type, forms, navigation, and many more components. Now you can use it with **WordPress** as a solid base to build custom themes quickly and easily.

Download the most-up-to-date theme files: [Download .zip file](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/zipball/v.90)
Follow the development: [WIP Branch on Github](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/1-WIP)

Demo
----
You can view a demo of this WordPress theme running the latest development branch code at: [http://bootstrapwp.rachelbaker.me/](http://bootstrapwp.rachelbaker.me/)

View the theme style guide at: [http://bootstrapwp.rachelbaker.me/style-guide/](http://bootstrapwp.rachelbaker.me/style-guide/)

View the javascript guide at: [http://bootstrapwp.rachelbaker.me/javascript-guide/](http://bootstrapwp.rachelbaker.me/javascript-guide/)


Usage
-----

Download the BootstrapWP theme, and install on a WordPress local or development site.

This is meant to be a base theme for WordPress custom theme development.  A knowledge of WordPress theme development practices as well as understanding of HTML, CSS/LESS, jQuery and PHP are required.

**Important!** To safely retain the ability to update the less files with future versions of Bootstrap or BootstrapWP, add all custom edits/changes inside the `less/bswp-custom.less` file.


Getting Started
-------

1. Create a page that uses the template `Hero Homepage Template`, then under `Settings->Reading`  set your site to use a static front page selecting your new page.

2. Add content to the three "Home" widget areas under `Appearances->Widgets`.

3. Create a menu under `Appearances->Menus` and assign it be your site's Main Menu.



Bug tracker
-----------

**Report theme bugs** [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues)

##v.90 of BootstrapWP - Release September 9, 2012

__Release Highlights:__

1.  Updated to Bootstrap 2.1 scripts and styles
2. Fixed `Custom Walker Menu` PHP error
3.  Fixed Automatic Thumbnail PHP errors
4.  Cleaned up unnecessary theme files

__Archive.php__

* Replaced conditional for `the_post_thumbnail()` with `bootstrapwp_autoset_featured_img()`.

__Author.php__

* Replaced conditional for `the_post_thumbnail()` with `bootstrapwp_autoset_featured_img()`.

__Class-bootstrapwp-walker-nav_menu.php__

*   Extending Walker_Nav_Menu to modify class assigned to submenu ul element.

__Footer.php__

*   Cleaned up ending div tags

__Functions.php__

*   Fixed `bootstrapwp_autoset_featured_img()` function to return if there is no image set, clearing debug errors.
*   Removed the post hooks for `bootstrap_autoset_featured_img()` function to clear debug errors.
*   Added `bootstrapwp_post_thumbnail_check()` function to check if the post displayed in the loop has a post thumbnail already.
*   Removed Custom Walker class from file and replaced with external include call for file 'includes/class-bootstrap_walker_nav_menu.php'.

__Header.php__

*   Updated responsive navbar wrapping to use the button element
*   Removed wp-list-pages fallback for custom menu
*   Removed div elements for content-wrapper and container at end of file

__Index.php__

*   Removed unnecessary double loop for page title.

__Page.php__

*   Removed '<header>' element wrapping around page title.

__Page-blog.php__

* Replaced conditional for `the_post_thumbnail()` with `bootstrapwp_autoset_featured_img()`.

__Docs Folder__

*   Removed entire 'docs' folder to clean up theme files.

__IMG Folder__

*   Removed sub-folder 'example-sites' to clean up theme files.
*   Removed sub-folder 'examples' to clean up theme files.
*   Updated with new images and icons from Bootstrap 2.1



Copyright and license
---------------------

This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

    You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.


Thanks to the Original Twitter Bootstrap Authors
-----------------------

**Mark Otto**

+ http://twitter.com/mdo
+ http://github.com/markdotto

**Jacob Thornton**

+ http://twitter.com/fat
+ http://github.com/fat



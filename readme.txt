== Change Log ==

=.90  = 09/09/2012

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


= .87 = 06/04/2012

**Release Highlights:**

1. Switched to using the Less files instead of CSS
2. Improved navigation submenu dropdown implementation with custom Walker
3. Updated styles and scripts to Bootstrap 2.04 release
4. Switched to using bootstrap.js file instead of the separate .js files

__Functions.php__

*	Edited `bootstrapwp_css_loader()` function to use new `/less/bootstrapwp.css` generated from Less file compilation and removed references to previously used css files
*	Edited `bootstrapwp_js_loader()` function to include minified and minified bootstrap.min.js file
*	Edited `bootstrapwp_js_loader()` function to include `/js/bootstrapwp.demo.js` file containing all the extra JavaScript needed to enable the functionality of demos
*	Added new walker `Bootstrap_Walker_Nav_Menu` class to assign "dropdown-menu" class to navigation sub-menus

__Style.css__

*	Removed content because it this file is not loaded via `bootstrapwp_css_loader()`
*	Added note to add custom updates to the less/bswp-custom.less file to safely retain the ability to update the less files with future versions of Bootstrap or BootstrapWP
*	Bumped version to .87

__Header.php__

*	Edited `wp_nav_menu()` call array to add `walker => new bootstrapwp_walker_nav_menu()` parameter
*	Removed extraneous commented line from `wp_nav_menu()` function call

__Footer.php__

*	Removed all Javascript and moved to new `js/bootstrapwp.demo.js` file

__Page-home.php__

*	Created file to be static homepage template that loads 3 widget areas (previously was index.php)

__Index.php__

*	Edited file to be standard blog homepage - and moved previous template content to new `page-home.php` file

__JS Folder__

*	Removed the individual .js files and replaced with single compiled `bootstrap.min.js` file
*   Added `bootstrap.js` (pre-minified version of bootstrap.min.js) file for reference
*   Added `bootstrapwp.demo.js` file which houses code is used to power all the JavaScript demos and examples for BootstrapWP
*   Added folder for google-code-prettify js and css files to style reference and documentation template files.

__CSS Folder__

*	Removed folder entirely because main style file is compiled less file located at `less/bootstrapwp.css`

__LESS Folder__

*	Updated LESS files from Twitter Bootstrap 2.04 branch
* 	Added `bswp-docs.less` file to pull in styles to allow doc pages to format correctly
*	Added note to use `bswp-custom.less` file for any custom additions to allow for easy updating of styles.
*	Added style fix for top positioning of scrollspy submenu to `less/bswp-overrides.less`

__IMG Folder__

*   Updated glyph icons with new set included in Bootstrap 2.04



= .86 = 04/11/2012

The major changes are:

1. Removed the buggy catch_that_image function that was displaying thumbnails for posts, and replacing it with the new `bootstrapwp_autoset_featured_image()` function that will automatically set the post thumbnail.
2. Fixed navbar on mobile devices where body padding was causing the navbar to drop below the the top of the window.
3. Revised order of stylesheets loading
4. Corrected the broken favicon links


__Bootstrap Styles and Scripts__

*	Updated JS files from Bootstrap 2.0.3 branch as of April 7, 2012
*	Updated CSS files from Bootstrap 2.0.3 branch as of April 11, 2012
*	Updated LESS files from Bootstrap 2.0.3 branch as of April 7, 2012

__Functions.php__

*    Added `bootstrapwp_autoset_featured_image()` function to replace previous `catch_that_image()` function that was causing issues for some theme users.  The post thumbnail will now automatically be set to the first image added to a post if a featured image was not manually declared.
*	Edited `bootstrapwp_css_loader()` to move `/css/bootstrap-responsive.css` down in the loading order

__Page-blog.php__

*    Replaced `catch_that_image()` function with `the_post_thumbnail()`

__Author.php__

*    Replaced `catch_that_image()` function with `the_post_thumbnail()`

__Archive.php__

*    Replaced `catch_that_image()` function with `the_post_thumbnail()`

__Header.php__

*	Added `<?php bloginfo( 'template_url' );?>` to favicon link
*	Removed `get_header()` call at top of file

__Style.css__

*	Added `@media (max-width: 979px) { body { padding-top: 0; }` to correct navbar on mobile devices
*	Updated `.sub-menu` style to match `.dropdown-menu` from the Twitter Bootstrap styles to fix max-width restriction on navigation dropdown items

__Page-JSGuide.php__

*	Added content from Bootstrap 2.0.3 files
*	Added note about using the JS files within a WordPress theme

__Page-Styleguide.php__

*	Added content from Bootstrap 2.0.3 files

__Misc.__

*	Fixed JavaScript guide link in Readme thanks to @fsimmons
*	Updated favicons and moved them to /ico/ folder
*	Adding new screenshot image thanks to @yourdesigncoza


= .85 = 03/04/2012

__Bootstrap Styles and Scripts__

*	Updated JS files from Bootstrap 2.0.2 branch as of March 4, 2012
*	Updated CSS files from Bootstrap 2.0.2 branch as of March 4, 2012
*	Updated LESS files from Bootstrap 2.0.2 branch as of March 4, 2012

__Functions.php__

*	Added widget area for footer-content
*	Fixed content_width size, now 770px
*	Added theme language text domain
*	Added after_theme_setup hook to enable post formats
*	Removed .css and .js from string names of enqueuing script and style functions

__Style.css__

*	Added .wp-caption and .wp-caption-text style for image captions
*	Added .gallery-caption style for image gallery captions
*	Added .bypostauthor style for comments
*	Added .sticky style for sticky posts

__Archive.php__

*	Added `<div <?php post_class(); ?>>` to enable sticky posts
*  Fixed Archive titles and filtering

__Author.php__

*	Added `<div <?php post_class(); ?>>` to enable sticky posts

__Footer.php__

*	Added widget code for footer content widget
*	Fixed jQuery dropdown caret function to only apply the top navigation bar

__Index.php__

*	Added WordPress loop to template so page editor can be used to easily update/add content to top section of index.php

__Page-Blog.php__

*	Added `<div <?php post_class(); ?>>` to enable sticky posts

__Page-JSGuide.php__

*	Added content from Bootstrap 2.0.2 files
*	Removed duplicated jQuery function

__Page-Styleguide.php__

*	Added content from Bootstrap 2.0.2 files

__Misc.__

*	Added /lang folder with language files
*  Removed image.php template file



= .8 = 2/12/2012
----
__Header.php__

*	Changed title to <title><?php wp_title(''); ?></title> to allow for better integration with WordPress SEO plugin

* Added body data attributes: data-spy="scroll" data-target=".subnav" data-offset="50" data-rendering="true"

* Changed navbar class to Bootstrap default of "navbar-fixed-top"

* Updated wp_nav_menu function array, added "'container' => 'div', 'container_class' => 'nav-collapse'," to provide div wrapper with proper class


__Functions.php__

*	Improved file structure and comments

*	Added bootstrap-responsive.css to bootstrapwp_css_loader function

*	Added application.js to bootstrapwp_js_loader function and removed tablesorter.js

*	Revised pagination section to use ul class="pager" instead of div id="pagination"

*	Revised sidebars to use div element as widget wrapper instead of aside element

*	Changed widget titles to h4 instead of h3 elements

*	Added catch_that_image function to grab the first image in blog posts

*	Added support for post-thumbnails and added image sizes for Boostrap image thumbnails


__Page-JSGuide.php__

*	Updated Javascript Guide Template to match content from Bootstrap javascript.html file


__Footer.php__

*	Removed jQuery onload functions that are now all called in application.js

*	Added jQuery append function to automatically apply b class="caret" to dropdown menu items in navbar


__Style.css__

* Updated icon image location to match theme setup

* Added .icon-white class with corrected image location

* Removed over-ride of body padding to allow correct spacing with fixed navbar
* Added styles for comment form

* Added color primary button colors for comment and search submit buttons

* Added styling for sidebars and sidebar list items

* Added .meta class for blog post meta information



__Single.php___

*	Edited content on index.php template to directly correlate with index.html Bootstrap file

*	Added bootstrapwp_posted_on function under post title


__Page-simple.php__

*	Created template for a simple page with right sidebar, no breadcrumbs or subhead masthead.


__Page-blog.php__

*	Created template for a main blog page with right sidebar.

*	Added paging to blog template

*	Displayed first image attached to blog posts using catch_that_image function


__Author.php__

*	Fixed formatting on this template file to match archive.php

*	Added hr element to seperate posts

*	Displayed first image attached to blog posts using catch_that_image function


__Archive.php__

*	Added hr element to seperate archive post listings

*	Displayed first image attached to blog posts using catch_that_image function


__Other/Misc.__

*	Updated CSS and JS files to Bootstrap 2 Final Release files

*	Removed "lib" folder and replaced with Bootstrap "less" folder

*	Removed tablesorter.js file - as it is no longer used in Bootstrap 2.0

*	Removed wordpress.css file - as it is no longer used in Bootstrap 2.0

*	Updated screenshot.png file

*	Removed image.php template file


= .7 = January 22, 2012
* Updated JS and CSS/LESS files from Twitter Bootstrap 2.0 WIP files (up to date as of January 20, 2012)
* Moved all CSS and JS files to their respective /css and /js folders
* The LESS files still exist in the /lib folder, but the bootstrap.css file is in the /css folder
* Replaced bootstrap-twipsy.js file with NEW bootstrap-tooltip.js file
* Modified enqueue_style order, and added style.css to the function to ensure it would be loaded last.
* Moved all Bootstrap documentation styles to their own docs.css file, and reserved styles.css for WordPress related modifications
* Created template for Javascript Demo page, needed onload scripts for Demo page were added in footer.php
* Moved Style Guide to it's own template file
* Moved Assets folder to root of theme folder with images folder
* Any added custom styles can now be found in style.css file
* Added custom jQuery to footer.php to allow the WordPress custom menus to work with the Bootstrap dropdown styles/js files.
* Removed Custom Walker Class from navigation menu.  It is not needed, with jQuery adding the needed class changes instead.
* Added image alignments (.alignleft, .alignright, .aligncenter) styles to styles.css
* Added styles to 404.php template file
* Added styles to search.php template file
* Added search form styles to style.css file
* Added $content_width declaration to functions.php



= .6 - December 24 2011 =
* Corrected callback function name in comments template
* Added comments template to single.php
* Modified top nav bar to have relative positioning to allow better viewing along with the WordPress Admin bar
* Moved breadcrumbs above page titles
* Fixed formatting on archive pages
* Fixed subnav drop-downs with customWalkerclass and css
* Moved bootstrap.css to the lib directory
* Created new LESS file wordpress.css for all Bootstrap style modificiations and WordPress specific styles
* Updated all Bootstrap LESS style files and JS script files for improved responsiveness and style tweaks
* Added pagination to bottom of single.php
* Created function to customize link for the_excerpt
* Removed extra /div from full-width template
* Bug fix: replaced get_bloginfo(url) in functions.php with home_url() function call
== Changelog ==

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
== Changelog ==

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
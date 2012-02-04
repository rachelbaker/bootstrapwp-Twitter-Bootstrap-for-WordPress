Bootstrapwp - TWITTER BOOTSTRAP for WordPress
=================

Bootstrap is a responsive front-end toolkit from Twitter designed to kickstart web development, complete with core HTML, CSS, and JS for grids, type, forms, navigation, and many more components. Now you can use it with **WordPress** as a solid base to build custom themes quickly and easily.

Version 1.0 Change Log

__Header.php__
* Added body data attributes: data-spy="scroll" data-target=".subnav" data-offset="50" data-rendering="true"
* Updated wp_nav_menu function array, added "'container' => 'div', 'container_class' => 'nav-collapse'," to provide div wrapper with proper class


__Functions.php__
* Added bootstrap-responsive.css to bootstrapwp_css_loader function
* Added jquery.js to bootstrapwp_js_loader function

__Page-JSGuide.php__
* Updated Javascript Guide Template to match content from Bootstrap javascript.html file

__Footer.php__
* Added jQuery onload function to allow scrollspy to work with the nav and subnav bars


__Style.css__
* Updated icon image location to match theme setup
* Added .icon-white class with corrected image location


__Index.php__
* Edited content on index.php template to directly correlate with index.html Bootstrap file


__Other/Misc.__
* Updated CSS and JS files to Bootstrap 2 Final Release files 

* Removed "lib" folder and replaced with Bootstrap "less" folder



**Latest version release: .7 (01/22/2012)**

Version .7 Change Log
----

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




Demo
----
You can view a demo of this theme running on WordPress at:  [http://rachelbaker.me/bootstrapwp/](http://rachelbaker.me/bootstrapwp/)

View the theme style guide at: [http://rachelbaker.me/bootstrapwp/style-guide/](http://rachelbaker.me/bootstrapwp/style-guide/)

View the javascript guide at: [http://rachelbaker.me/bootstrapwp/javascript-for-bootstrap/](http://rachelbaker.me/bootstrapwp/javascript-for-bootstrap/)




Usage
-----

Download the Bootstrapwp theme, and install to your WordPress site.

This is meant to be a base theme for WordPress custom theme development.  

You can override any of the styles using style.css file.  All .css and .js files are loaded in functions.php.  Don't forget to disable any of the .js files you do not need.  




Bug tracker
-----------
**Report additional bugs** [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues)


**Known theme bugs:**

* REQUIRED: This theme doesn't seem to display tags. Modify it to display tags in appropriate locations.
* REQUIRED: .wp-caption css class is needed in your theme css.
* REQUIRED: .wp-caption-text css class is needed in your theme css.
* REQUIRED: .bypostauthor css class is needed in your theme css.
* RECOMMENDED: Text domain problems in functions.php. You have not included a text domain!
Line 408: echo __('Page') . ' ' . get_query_var('paged');
* RECOMMENDED: No reference to post-thumbnails was found in the theme. If the theme has a thumbnail like functionality, it should be implemented with add_theme_support( 'post-thumbnails' )in the functions.php file.
* RECOMMENDED: No reference to the_post_thumbnail() was found in the theme. It is recommended that the theme implement this functionality instead of using custom fields for thumbnails.
* RECOMMENDED: No reference to add_editor_style() was found in the theme. It is recommended that the theme implement editor styling, so as to make the editor content match the resulting post output in the theme, for a better user experience.
* RECOMMENDED: No reference to add_custom_image_header was found in the theme. It is recommended that the theme implement this functionality if using an image for the header.
* RECOMMENDED: No reference to add_custom_background() was found in the theme. If the theme uses background images or solid colors for the background, then it is recommended that the theme implement this functionality.
* RECOMMENDED: Tags: is either empty or missing in style.css header.

**Have a bug? Please create an issue here on GitHub!**




Thanks to the Original Twitter Bootstrap Authors
-----------------------

**Mark Otto**

+ http://twitter.com/mdo
+ http://github.com/markdotto

**Jacob Thornton**

+ http://twitter.com/fat
+ http://github.com/fat


Copyright and license
---------------------


Licensed under the Apache License, Version 2.0 (the "License");
you may not use this work except in compliance with the License.
You may obtain a copy of the License in the LICENSE file, or at:

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

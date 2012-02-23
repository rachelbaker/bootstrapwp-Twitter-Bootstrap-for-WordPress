Bootstrapwp - TWITTER BOOTSTRAP for WordPress
=================

Bootstrap is a responsive front-end toolkit from Twitter designed to kickstart web development, complete with core HTML, CSS, and JS for grids, type, forms, navigation, and many more components. Now you can use it with **WordPress** as a solid base to build custom themes quickly and easily.

For the most up-to-date version, follow the in-process development branch: [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/2.0-update](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/2.0-update)

Version .85 in Development

__Functions.php__

*	Declared widget area for footer-content
*	Changed content_width size to 770px
*	Added theme language text domain
*	Added after_theme_setup hook to enable post formats 

__Style.css__

*	Added .wp-caption and .wp-caption-text style for image captions
*	Added .gallery-caption style for image gallery captions
*	Added .bypostauthor style for comments
*	Added .sticky style for sticky posts

__Archive.php__

*	Added `<div <?php post_class(); ?>>` to enable sticky posts

__Author.php__

*	Added `<div <?php post_class(); ?>>` to enable sticky posts

__Footer.php__

*	Inserted widget code for footer content widget

__Index.php__

*	Added WordPress loop to template so page editor can be used to easily update/add content to top section of index.php

__Page-Blog.php__

*	Added `<div <?php post_class(); ?>>` to enable sticky posts

__Page-JSGuide.php__

*	Changed carousel images function to get_template_directory_uri()

__Misc.__

*	Added /lang folder with language files




**Latest version release: .8 (02/12/2012)**

Version .8 Change Log
---

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



Demo
----
You can view a demo of this theme running on WordPress at:  [http://rachelbaker.me/bootstrapwp/](http://rachelbaker.me/bootstrapwp/)

View the theme style guide at: [http://rachelbaker.me/bootstrapwp/style-guide/](http://rachelbaker.me/bootstrapwp/style-guide/)

View the javascript guide at: [http://rachelbaker.me/bootstrapwp/javascript-for-bootstrap/](http://rachelbaker.me/bootstrapwp/javascript-for-bootstrap/)




Usage
-----

Download the BootstrapWP theme, and install to your WordPress site.

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

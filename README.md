Bootstrapwp - TWITTER BOOTSTRAP for WordPress
=================

Bootstrap is a responsive front-end toolkit from Twitter designed to kickstart web development, complete with core HTML, CSS, and JS for grids, type, forms, navigation, and many more components. Now you can use it with **WordPress** as a solid base to build custom themes quickly and easily.

For the most up-to-date version, follow the in-process development branch: [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/1-WIP](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/1-WIP)

Version .85 (Released 03/04/2012)
-------------

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



Demo
----
You can view a demo of this theme running on WordPress at:  [http://rachelbaker.me/bootstrapwp/](http://rachelbaker.me/bootstrapwp/)

View the theme style guide at: [http://rachelbaker.me/bootstrapwp/style-guide/](http://rachelbaker.me/bootstrapwp/style-guide/)

View the javascript guide at: [http://rachelbaker.me/bootstrapwp/javascript-guide/](http://rachelbaker.me/bootstrapwp/javascript-guide/)




Usage
-----

Download the BootstrapWP theme, and install to your WordPress site.

This is meant to be a base theme for WordPress custom theme development.  

You can override any of the styles using style.css file.  All .css and .js files are loaded in functions.php.  Don't forget to disable any of the .js files you do not need.  




Bug tracker
-----------
**Known theme bugs:**

Listed on the [Bug Tracker](http://rachelbaker.me/bootstrapwp/bug-tracker/) page

**Report additional bugs** [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues)




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

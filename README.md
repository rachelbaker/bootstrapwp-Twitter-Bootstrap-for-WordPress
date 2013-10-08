BootstrapWP - Bootstrap Theme for WordPress
=================

![image](http://f.cl.ly/items/3x1o3V042y3n1X3z1t1O/BootstrapWP-v91-home.png) 


Bootstrap is a responsive front-end toolkit from Twitter designed to kickstart web development, complete with core HTML, CSS, and JS for grids, type, forms, navigation, and many more components. Now you can use it with **WordPress** as a solid base to build custom themes quickly and easily.

Download the most-up-to-date theme files: [Download .zip file](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/zipball/v.90)
Follow the development: [WIP Branch on Github](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/1-WIP)

Demo
----
You can view a demo of this WordPress theme running the latest development branch code at: [http://bootstrapwp.rachelbaker.me/](http://bootstrapwp.rachelbaker.me/)

View the theme's base CSS elements at: [http://bootstrapwp.rachelbaker.me/base-css/](http://bootstrapwp.rachelbaker.me/base-css/)

View the theme's JavaScript guide at: [http://bootstrapwp.rachelbaker.me/javascript/](http://bootstrapwp.rachelbaker.me/javascript/)


Usage
-----

Download the BootstrapWP theme, and install on a WordPress local or development site.

This is meant to be a base theme for WordPress custom theme development.  Your knowledge of WordPress theme development practices as well as understanding of HTML, CSS/LESS, jQuery and PHP are required.


Getting Started
-------

1. Create a page that uses the template `Page - Home Hero`, then under `Settings->Reading`  set your site to use a static front page selecting your new page.

2. Add content to the three "Home" widget areas under `Appearances->Widgets`.

3. Create a menu under `Appearances->Menus` and assign it be your site's Main Menu.

Customization
-------

**Comfortable with LESS?**

Check out the /assets/css/less folder where the `bootstrapwp.less` file is the master complier.  The included files compile the `bootstrapwp.css` file that is located in the /assets/css folder.
**Important!** To safely retain the ability to update the less files with future versions of Bootstrap or BootstrapWP, add all custom edits/changes inside the `less/bswp-custom.less` file.


**Not comfortable with LESS?**

You can override the compiled bootstrapwp.css file by adding custom styles to the style.css in the theme's root directory.


**Prefer to create a Child Theme?**

BootstrapWP is Child Theme compatible.  For more information on how to create a [Child Theme check out the WordPress Codex](http://codex.wordpress.org/Child_Themes#Directory_structure).  


Bug tracker
-----------

Please report all issues on the repo's Issue Tracker. Remember to provide as much information as possible regarding the bug/issue you are reporting so a patch can be released.

**Report theme bugs** [https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues](https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues)


##v.91 of BootstrapWP ##

**Release Highlights:**

1.  Updated to Bootstrap 2.2.1 scripts and styles
2.  Fix Child Theme compatibility
3.  Improved file organization with assets and template folders
4.  Merged internationalization/translation contributions from [santiagogil](https://github.com/santiagogil) and [zedejose](https://github.com/zedejose)

__Assets Folder__

* Now contains the following folders: css, js, img, fonts and ico
* Removed assets/css/less/bswp-docs.less file as it is now only loaded on documentation templates.
* Updated all LESS and JS files from Bootstrap 2.2.1

__Templates-Documentation Folder__

* Holds documentation page templates and related assets
* Updated documentation templates and docs.css file from Bootstrap 2.2.1

__Templates-Pages Folder__

* Holds theme's page templates
* Changed layout on `page-home.php` to match hero template
* Removed "jumbotron" class from h1 title on `page-blog.php` template

__404.php__

* Removed masthead comment to clean up template file

__Archive.php__

*  Reorganized divs around breadcrumbs

__Author.php__

*  Reorganized divs around breadcrumbs

__Footer.php__

*   Back to top text is now translatable (props @santiagogil)

__Functions.php__

*   Changed paths to CSS and JS files to assets folder
*  Corrected text-domain (props @zedejose)
*  Added localization support for widgets and excerpt text (props @santiagogil)
* Edited height on bootstrap-medium image size

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



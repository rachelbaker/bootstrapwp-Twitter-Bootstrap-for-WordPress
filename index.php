<?php
/**
 *
 * Template Name: Default Index Template
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: February 7, 2012
 */
get_header(); ?>
<div class="container">

      <header class="jumbotron masthead">
          <div class="inner">
            <h1>BootstrapWP</h1>
           <h1>Bootstrap theme for WordPress</h1>
         <p>Bootstrap is a simple and flexible HTML, CSS, and Javascript for popular user interface components and interactions.</p> 
         <p>Now you can use it with <strong>WordPress</strong> as a solid base for theme development, to build custom themes quickly and easily.</p>
         <p class="download-info">
              <a href="https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress" class="btn btn-primary btn-large">Download on GitHub</a> Version .7</p>
             <p class="download-info">
            <a href="https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/tree/2.0-update" class="btn btn-large">Download the Development Branch</a>
              Version 1.0 - in-process</p>
            </div>
         

       
<ul class="quick-links">
          <li><a href="https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress">GitHub</a></li>
          <li><a href="https://github.com/rachelbaker/bootstrapwp-Twitter-Bootstrap-for-WordPress/issues?state=open">Issues</a></li>
          <li><a href="http://www.rachelbaker.me">RachelBaker.me</a></li>
          <li><a href="http://www.wordpress.org">WordPress.org</a></li>
          <li class="divider">&middot;</li>
          <li>
            <iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=rachelbaker&repo=bootstrapwp-Twitter-Bootstrap-for-WordPress&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110px" height="20px"></iframe>
          </li>
          <li>
            <iframe class="github-btn" src="http://markdotto.github.com/github-buttons/github-btn.html?user=rachelbaker&repo=bootstrapwp-Twitter-Bootstrap-for-WordPress&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="94px" height="20px"></iframe>
          </li>


          <li class="divider">&middot;</li>
          <li class="follow-btn">
            <a href="https://twitter.com/rachelbaker" class="twitter-follow-button" data-width="145px" data-link-color="#0069D6" data-show-count="false">Follow @rachelbaker</a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
          </li>

        </ul>
         </header>
       <hr class="soften">
       <div class="marketing">
      <div class="row">
        <div class="span4">
          <?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-left");
?>
        </div>
        <div class="span4">
          <?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-middle");
?>
       </div>
        <div class="span4">
          <?php
    if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-right");
?>
        </div>
      </div>
      </div><!-- /.marketing -->
      <?php get_footer();?>

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
 * Last Revised: February 3, 2012
 */
get_header(); ?>
<div class="container">

      <header class="jumbotron masthead">
          <div class="inner">
            <h1>Bootstrapwp,<br> Bootstrap for WordPress</h1>
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
      <hr class="soften">

  <h1>Designed for everyone, everywhere.</h1>
  <p class="marketing-byline">Need reasons to love Bootstrap? Look no further.</p>
  <div class="row">
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_042_group.png">
      <h2>Built for and by nerds</h2>
      <p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you.</p>
    </div>
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_079_podium.png">
      <h2>For all skill levels</h2>
      <p>Bootstrap is designed to help people of all skill level&mdash;designer or developer, huge nerd or early beginner. Use it as a complete kit or use to start something more complex.</p>
    </div>
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_163_iphone.png">
      <h2>Cross-everything</h2>
      <p>Originally built with only modern browsers in mind, Bootstrap has evolved to include support for all major browsers (even IE7!) and, with Bootstrap 2, tablets and smartphones, too.</p>
    </div>
  </div><!--/row-->
  <div class="row">
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_155_show_thumbnails.png">
      <h2>12-column grid</h2>
      <p>Grid systems aren't everything, but having a durable and flexible one at the core of your work can make development much simpler. Use our built-in grid classes or roll your own.</p>
    </div>
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_214_resize_small.png">
      <h2>Responsive design</h2>
      <p>With Bootstrap 2, we've gone fully responsive. Our components are scaled according to a range of resolutions and devices to provide a consistent experience, no matter what.</p>
    </div>
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_266_book_open.png">
      <h2>Styleguide docs</h2>
      <p>Unlike other front-end toolkits, Bootstrap was designed first and foremost as a styleguide to document not only our features, but best practices and living, coded examples.</p>
    </div>
  </div><!--/row-->
  <div class="row">
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_082_roundabout.png">
      <h2>Growing library</h2>
      <p>Despite being only 10kb (gzipped), Bootstrap is one of the most complete front-end toolkits out there with dozens of fully functional components ready to be put to use.</p>
    </div>
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/glyphicons/glyphicons_009_magic.png">
      <h2>Custom jQuery plugins</h2>
      <p>What good is an awesome design component without easy-to-use, proper, and extensible interactions? With Bootstrap, you get custom-built jQuery plugins to bring your projects to life.</p>
    </div>
    <div class="span4">
      <img class="bs-icon" src="<?php bloginfo('template_url')?>/img/less-small.png">
      <h2>Built on LESS</h2>
      <p>Where vanilla CSS falters, LESS excels. Variables, nesting, operations, and mixins in LESS makes coding CSS faster and more efficient with minimal overhead.</p>
    </div>
  </div><!--/row-->
  <div class="row">
    <div class="span3">
      <img class="small-bs-icon" src="<?php bloginfo('template_url')?>/img/icon-html5.png">
      <h3>HTML5</h3>
      <p>Built to support new HTML5 elements and syntax.</p>
    </div>
    <div class="span3">
      <img class="small-bs-icon" src="<?php bloginfo('template_url')?>/img/icon-css3.png">
      <h3>CSS3</h3>
      <p>Progressively enhanced components for ultimate style.</p>
    </div>
    <div class="span3">
      <img class="small-bs-icon" src="<?php bloginfo('template_url')?>/img/icon-github.png">
      <h3>Open-source</h3>
      <p>Built for and maintained by the community via <a href="https://github.com">GitHub</a>.</p>
    </div>
    <div class="span3">
      <img class="small-bs-icon" src="<?php bloginfo('template_url')?>/img/icon-twitter.png">
      <h3>Made at Twitter</h3>
      <p>Brought to you by an experienced <a href="http://twitter.com/fat">engineer</a> and <a href="http://twitter.com/mdo">designer</a>.</p>
    </div>
  </div><!--/row-->
      </div><!-- /.marketing -->
      <?php get_footer();?>

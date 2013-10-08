<?php
/**
 * Right Sidebar displayed on post and blog templates.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <div class="span4">
            <div class="well sidebar-nav">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("sidebar-posts");
                } ?>
            </div><!--/.well .sidebar-nav -->
        </div><!-- /.span4 -->
    </div><!-- /.row .content -->
</div><!--/.container -->

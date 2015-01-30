<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkylarWuebker2.5
 */
?>

                <div class="clear"></div>
                <div class="footer"><article> &copy; Skylar Wuebker 2015</div>
            </section>
            

            </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
		<script src="http://joncontino.com/wp-content/themes/salient/js/imagesLoaded.min.js?ver=3.1.1"></script>
        <script src="<?php bloginfo('template_directory'); ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>js/vendor/isotope.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>js/vendor/jquery.sidr.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>js/vendor/jquery.touchwipe.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>js/vendor/jquery.fancybox.pack.js"></script>
        <script src="j<?php bloginfo('template_directory'); ?>s/vendor/jquery.scrollTo.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>js/vendor/jquery.localScroll.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>js/vendor/skrollr.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>js/vendor/appear.js"></script>

        <script src="<?php bloginfo('template_directory'); ?>js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49879763-1', 'skylarwuebker.com');
      ga('send', 'pageview');
        </script>
        <?php wp_footer(); ?>  
    </body>
    </html>

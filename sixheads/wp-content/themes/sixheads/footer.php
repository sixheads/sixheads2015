<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sixheads
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="arrow arrow-up">
            <a href="#top">
                <img src="<?php bloginfo('template_directory'); ?>/img/icon-arrow-up.svg" alt="down">
            </a>
        </div>

        <ul class="site-social">
            <li><a href="https://twitter.com/sixheads"><span class="icon-twitter"></span></a></li>
            <li><a href="https://www.facebook.com/sixheads"><span class="icon-facebook"></span></a></li>
            <li><a href="https://plus.google.com/+Sixheads"><span class="icon-googleplus"></span></a></li>
            <li><a href="http://www.pinterest.com/sixheads/"><span class="icon-pinterest"></span></a></li>
            <!-- <li><a href=""><span class="icon-linkedin"></span> LinkedIn</a></li> -->
        </ul><!-- .site-info -->
		<div class="site-info">
			&copy; Sixheads <?php the_date('Y'); ?>. All Rights Reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-21522708-1', 'sixheads.com');
      ga('send', 'pageview');

    </script>
</body>
</html>

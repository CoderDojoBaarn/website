<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */

?>

    </div><!-- #content -->
	
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="row site-info">
            <a href="https://coderdojo.com"><img height="30px" style="margin-top: 10px;" src="<?php echo esc_url(get_template_directory_uri());?>/images/cdint.png"></a>
            <?php echo '&copy; '.date("Y"); ?> 
            <span class="sep"> | </span>
            <?php printf( esc_html__( 'Proudly Powered by ','nisarg')); ?>
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nisarg' ) ); ?>">WordPress</a>
            en
            <a href="<?php echo esc_url( __( 'https://vibrantbrands.nl/', 'nisarg' ) ); ?>">VibrantBrands</a>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86273281-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

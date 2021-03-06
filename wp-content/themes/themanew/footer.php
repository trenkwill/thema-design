<?php
/**
 * @package WordPress
 * @subpackage thema-new
 * @since thema-new 1.0
 */
?>
<div class="container pt pb">
		<footer id="footer" class="source-org vcard copyright text-center" role="contentinfo">
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | <a href="mentions-legales">Mentions légales</a></small>
		</footer>

	</div>

	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions: This is in the enqueue function currently -->
<!-- <script src="<?php bloginfo('template_directory'); ?>/static/js/footer.js"></script> -->

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>
-->
	
</body>

</html>

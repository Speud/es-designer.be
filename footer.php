			</div> <!-- content -->
			<div class="push"><!--//--></div> <!-- clear both -->
	</div> <!-- fin WRAPPER -->		
			<footer class="footer">
				<img src="<?php bloginfo('template_directory'); ?>/images/footer.png" alt="Samu Emmanuel" width="420px" height="70px" class="footerImg" />
				<p>&copy; 2012 Samu Emmanuel</p>
			</footer> <!-- fin FOOTER -->
	
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.1.min.js" type="text/javascript"></script>	
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.js"><\/script>')</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/less.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
		<script>
			jQuery( function() {
				jQuery( '#unique a.thumbnail' ).heplbox();
				jQuery( '#many a.thumbnail' ).heplbox();
			} );
		</script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-35576787-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
    </body>
</html>



						<!-- end small-12 col -->
					<div class="footer-wrapper">
						<!-- footer -->
						<footer class="footer small-12 medium-11 small-centered columns" role="contentinfo">

							<!-- copyright -->
							<div class="row">
								<div class="small-12 medium-2 right small-text-center medium-text-right columns">
									<a href="#" class="scrollup">Back to top</a>
								</div>
								<div class="small-12 medium-10 small-text-center medium-text-left columns">
									<!-- &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> -->
									<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-area')) ?>
								</div>

							</div>
							<!-- /copyright -->

						</footer>
						<!-- /footer -->
					</div>

				</div>
				<!-- end of row -->
			</div>
			<!-- end of row -->
		</div>
		<!-- /transition wrapper -->
		</div>
		<!-- /all wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>

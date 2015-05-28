

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
		 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		 ga('create', 'UA-63430291-1', 'auto');
		 ga('send', 'pageview');

		</script>

	</body>
</html>

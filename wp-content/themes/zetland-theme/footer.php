</section>
</div>
</div>

  <div class="section-wrapper the-end">
    <div class="small-12 medium-11 small-centered columns vertical-align">
      <?php 
      // PEOPLE INTRO
      $args = array( 'post_type' => 'page', "posts_per_page" => "1", "offset" => "5"); 
      $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="row ">
          <div class="end-message">
            <div class="small-10 medium-6 columns">
              <h1><?php the_content(); ?></h1>
            </div>
            <div class="small-8 medium-6 text-center columns">
              <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), full ); ?>
              <img width="65%" src="<?php echo $featuredimage[0]; ?>">
            </div>
          </div>
        </div>
      </div>
      <div class="small-12 medium-11 small-centered columns">
        <div class="row">
          <div class="social">
            <div class="small-12 columns">
              <a target="_blank" href="https://twitter.com/zetlandmagasin">Twitter</a>
              <a target="_blank" href="https://www.facebook.com/pages/zetland/341299649231023">Facebook</a>
            </div>
            <div class="small-12 columns">
              <p>© Copyright Zetland men del og lån alt hvad du vil.</p>
            </div>
          </div>
        </div>
      <?php endwhile; endif; 
      wp_reset_postdata(); ?>
    </div>
  </div>

<footer class="row">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-63722736-1', 'auto');
 ga('send', 'pageview');

</script>
</body>
</html>

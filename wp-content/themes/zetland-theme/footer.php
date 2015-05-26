</section>
</div>

  <div class="section-wrapper the-end">
    <div class="small-11 small-centered columns">
      <?php 
      // PEOPLE INTRO
      $args = array( 'post_type' => 'page', 'post__in' => array(53)); 
      $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="row">
          <div class="small-6 columns">
            <h1><?php the_content(); ?></h1>
          </div>
          <div class="small-6 columns">
            <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), full ); ?>
            <img class="person" src="<?php echo $featuredimage[0]; ?>">
          </div>
        </div>
        <div class="row social">
          <div class="small-12 columns">
            <a href="">Twitter</a>
            <a href="">Facebook</a>
          </div>
          <div class="small-12 columns">
            <p>© Copyright Zetland men del og lån alt hvad du vil.</p>
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
</body>
</html>

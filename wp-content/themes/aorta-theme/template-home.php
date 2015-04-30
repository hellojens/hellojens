<?php /* Template Name: Home */ get_header(); ?>

	<div class="top-section home-hero">
		<div class="row"> 
	 			<section class="small-11 small-centered columns">

		    	<?php $the_query = new WP_Query( array("posts_per_page" => "1") ); ?>
		     		<?php while($the_query->have_posts()): $the_query->the_post(); ?>
							<article class="row">
								<div class="small-12 medium-11 text-center medium-centered large-uncentered large-6 columns">
									<?php the_post_thumbnail(large, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
								</div>
								<div class="hero-content small-12 medium-10 medium-only-text-center medium-centered large-uncentered large-6 columns">
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<p class="show-for-medium-up"><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,42); ?></p>
									<a class="readmore" href="<?php the_permalink(); ?>"> Read More > </a>
								</div>
							</article>

		      	<?php endwhile; ?>    
	      	<?php wp_reset_query(); ?>

			</section>
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<section class="small-10 medium-11 small-centered columns">
				<div class="row grid">
		    	<?php 
				    $offset = htmlspecialchars(trim($_GET['offset']));
				    if ($offset == '') { $offset = 1; }
		    		$the_query = new WP_Query( array("offset" => $offset) ); 
		    	?>
					<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

						<div class="isotope-align small-12 medium-4 large-3 left columns loadMore">
							<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "home-post")); ?>>
<div class="spinner">
  <div class="dot1"></div>
  <div class="dot2"></div>
</div>
								<a class="post-thumbnail" href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
								</a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2>
								<p class="show-for-medium-up"><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,28); ?> </p>
							</article>
						</div>

					<?php endwhile; endif; ?>
		      <?php wp_reset_query(); ?>
	      </div>
			</section>
		</div>
		<div class="row">
			<div class="page-nav small-10 small-centered text-center columns">

				<a rel="<?php echo site_url(), $_SERVER['REQUEST_URI']; ?>" class="load-more">There's more</a>
			<div class="loader" title="3">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <rect x="0" y="0" width="4" height="7" fill="#333">
      <animateTransform  attributeType="xml"
        attributeName="transform" type="scale"
        values="1,1; 1,3; 1,1"
        begin="0s" dur="0.6s" repeatCount="indefinite" />       
    </rect>

    <rect x="10" y="0" width="4" height="7" fill="#333">
      <animateTransform  attributeType="xml"
        attributeName="transform" type="scale"
        values="1,1; 1,3; 1,1"
        begin="0.2s" dur="0.6s" repeatCount="indefinite" />       
    </rect>
    <rect x="20" y="0" width="4" height="7" fill="#333">
      <animateTransform  attributeType="xml"
        attributeName="transform" type="scale"
        values="1,1; 1,3; 1,1"
        begin="0.4s" dur="0.6s" repeatCount="indefinite" />       
    </rect>
  </svg>
</div>
			</div>
		</div>
	</div>

	<!-- Related Stories  -->
	<?php // get_template_part("loop","related-random"); ?>
	<!-- /Related Stories  -->

<?php get_footer(); ?>
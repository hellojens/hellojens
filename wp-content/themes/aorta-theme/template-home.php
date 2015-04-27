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
								<div class="hero-content small-12 medium-10 medium-only-text-center medium-centered large-uncentered large-5 columns">
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<p class="show-for-medium-up"><?php html5wp_excerpt('html5wp_index'); ?></p>
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
			<section class="small-10 medium-11 small-centered columns main-grid">
				<div class="row">

	    	<?php $the_query = new WP_Query( array("offset" => 1) ); ?>
				<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

					<div class="small-12 medium-4 large-3 left columns">
						<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "home-post")); ?>>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
							</a>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2>
							<p class="show-for-medium-up"><?php html5wp_excerpt('html5wp_index'); ?></p>
						</article>
					</div>

				<?php endwhile; endif; ?>
	      <?php wp_reset_query(); ?>

			</section>
		</div>
	</div>

	<!-- Related Stories  -->
	<?php get_template_part("loop","related-random"); ?>
	<!-- /Related Stories  -->

<?php get_footer(); ?>
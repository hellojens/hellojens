	<div class="related-section">
		<div class="row"> 
			<section class="small-10 medium-11 small-centered text-center columns">
				<div class="row">

				<h3>Other stories </h3>

	    	<?php $random_query = new WP_Query( array("posts_per_page" => 4, "orderby" => "rand" )); ?>
				<?php if (have_posts()): while($random_query->have_posts()): $random_query->the_post(); ?>

					<div class="small-12 medium-3 large-3 text-left left columns">
						<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "home-post")); ?>>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
							</a>
							<div class="">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2>
								<p class="show-for-medium-up"><?php html5wp_excerpt('html5wp_index'); ?></p>
							</div>
						</article>
					</div>

				<?php endwhile; endif; ?>
	      <?php wp_reset_query(); ?>

			</section>
		</div>
	</div>
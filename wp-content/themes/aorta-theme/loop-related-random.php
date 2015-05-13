	<div class="related-section">
		<div class="row"> 
			<section class="small-12 medium-11 small-centered text-center columns">
				<div class="row">

				<h3>Recommended for you</h3>

	    	<?php $random_query = new WP_Query( array("posts_per_page" => 4, "orderby" => "rand" )); ?>
				<?php if (have_posts()): while($random_query->have_posts()): $random_query->the_post(); ?>

					<div class="small-12 medium-3 large-3 text-left left columns">
							<?php get_template_part("content","standard-post"); ?>
					</div>

				<?php endwhile; endif; ?>
	      <?php wp_reset_query(); ?>

			</section>
		</div>
	</div>
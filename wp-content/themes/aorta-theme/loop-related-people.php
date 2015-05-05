	<div class="related-section">
		<div class="row"> 
			<section class="small-10 medium-11 small-centered text-center columns main-grid">
				<div class="row">

				<?php $this_author = get_the_author_meta('ID'); ?>

				<h3><?php the_author_meta("first_name"); ?>'s stories</h3>

	    	<?php 
          $the_query = new WP_Query( array("posts_per_page" => "4", "post_type"=>"post", "author"=>$this_author ) ); 
	    	?>

				<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

					<div class="small-12 medium-3 large-3 text-left left columns">
							<?php get_template_part("content","standard-post"); ?>
					</div>

				<?php endwhile; endif; ?>
	      <?php wp_reset_query(); ?>

			</section>
		</div>
	</div>
<?php get_header(); ?>

	<div class="top-section people">
		<div class="row"> 
 			<section class="small-12 text-center small-centered columns">

	    	<?php 
          $the_query = new WP_Query( array("posts_per_page" => "1", "post_type"=>"post", "author"=>$this_author ) ); 
	    	?>

				<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

					<?php // the_post_thumbnail(full, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>

				<?php endwhile; endif; ?>
	      <?php wp_reset_query(); ?>

			</section>
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<section class="small-11 small-centered columns main-grid">
				<div class="row">
					<div class="small-3 text-center columns">
						<?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
					</div>
					<div class="small-6 left columns">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "people-post")); ?>>
									
									<?php echo get_avatar( get_the_author_meta( 'ID' ), 512); ?>

									<h1><?php the_title(); ?></h1>
									<?php if (function_exists('the_subheading')) { the_subheading('<h1>', '</h1>'); } ?></h1>

									<p><?php the_content(); ?></p>
								</article>

						<?php endwhile; endif; ?>
			      <?php wp_reset_query(); ?>
					</div>
	      </div>
			</section>
		</div>
	</div>

	<!-- Related Stories  -->
	<?php get_template_part("loop","related-people"); ?>
	<!-- /Related Stories  -->

<?php get_footer(); ?>

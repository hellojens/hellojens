<?php get_header(); ?>

	<div class="top-section single-post">
		<div class="row"> 
 			<section class="small-6 text-center small-centered columns">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<?php //the_post_thumbnail(full, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>

      	<?php endwhile; endif;?>    

			</section>
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<div class="small-11 small-centered columns">
				<div class="row">
					<section class="large-9 right post-content columns">
						<div class="row">
							<div class="large-9 columns">
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "single-post-content")); ?>>
											<div class="small-7 columns signatur"> 
												<?php echo get_avatar( get_the_author_meta( 'ID' ), 512 ); ?>
											</div>
											<div class="small-12 columns"> 
												<h1><?php the_title(); ?></h1>
												<p><?php the_content(); ?></p>
											</div>
										</article>
								<?php endwhile; endif; ?>
					      <?php wp_reset_query(); ?>
				      </div>
			      </div>
					</section>
					<section class="large-2 left author-content columns">
						<div class="row">
							<?php $this_author = get_the_author_meta('ID'); ?>						
					  	<?php $the_query = new WP_Query( array("post_type" => "people", "author"=> $this_author ) ); ?>
							<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
								</a>
								<b><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></b>
								<?php if (function_exists('the_subheading')) { the_subheading('<p>', '</p>'); } ?>
								<p><?php html5wp_excerpt('html5wp_index'); ?></p>
							<?php endwhile; endif; ?>
					    <?php wp_reset_query(); ?>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<!-- Related Stories  -->
	<?php get_template_part("loop","related-random"); ?>
	<!-- /Related Stories  -->

<?php get_footer(); ?>

<?php get_header(); ?>

	<div class="top-section single-post">
		<div class="row"> 
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), full ); ?>
	 			<section class="single-header small-12 text-center small-centered small-collapse columns" style="background-image: url('<?php echo $featuredimage[0]; ?>');">
				</section>
    	<?php endwhile; endif;?>    
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<div class="small-12 medium-11 small-centered columns content-slab">
				<div class="row">
					<section class="medium-9 right post-content columns">
						<div class="row">
							<div class="large-12 columns">
								<?php if (have_posts()): while (have_posts()) : the_post(); ?>
										<?php $this_author = get_the_author_meta('ID'); ?>						
										<?php $preventdouble = array(get_the_ID()) // Prevent post duplicate  ?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "single-post-content")); ?>>
											<div class="small-10 medium-7 columns signatur"> 
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
					<section class="small-10 small-centered medium-3 large-3 medium-left small-text-center medium-text-left author-content columns">
						<div class="row">
					  	<?php $the_query = new WP_Query( array("posts_per_page" => "1", "post_type" => "people", "author"=> $this_author ) ); ?>
							<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

								<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
									<?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
								</a>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h3>
								<?php if (function_exists('the_subheading')) { the_subheading('<p class="author-title">', '</p>'); } ?>
								
								<p class="excerpt"><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,48); ?></p>
					    	<div class="author-moreby"><?php the_title(); ?>'s other stories</div>

							<?php endwhile; endif; ?>	
					    <?php wp_reset_query(); ?>

					  	<?php $the_query = new WP_Query( array("posts_per_page" => "4", 'post__not_in' => $preventdouble, "post_type" => "post", "author"=> $this_author, ) ); ?>
							<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
									<h2><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
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

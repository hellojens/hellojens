<?php /* Template Name: Home */ get_header(); ?>

	<div class="top-section home-hero">
		<div class="row"> 
 			<section class="small-12 large-11 small-centered columns">
					<div class="row">
		    	<?php $the_query = new WP_Query( array("posts_per_page" => "2") ); ?>
		     		<?php while($the_query->have_posts()): $the_query->the_post(); ?>
							<?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), large ); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "top-post")); ?>>
								<div class="small-12 medium-6 text-center large-6 columns">
									<a href="<?php the_permalink(); ?>" class="show-for-small-only" style="display: inline-block; width: 100%; height: 100%;">

									<div class="post-thumbnail background-fit" style="background-image: url('<?php echo $featuredimage[0]; ?>');">	
										<a href="<?php the_permalink(); ?>">
											<div class="post-overlay">
												<div class="post-overlay-content">
													<div class="author"><?php the_author(); ?></div>
													<p class="columns medium-8 small-centered"><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,10); ?></p>
												</div>
											</div>
										</a>
									</div>
									</a>
									<div class="columns small-12 medium-10 small-centered">
									  <?php
									    $category = get_the_category();
									    $category_id = $category[0]->cat_ID;
									    $category_link = get_category_link( $category_id );
									  ?>
  									<div class="date"><?php the_time('d.m.Y'); ?> | <a href="<?php echo esc_url( $category_link ); ?>"><?php echo $category[0]->cat_name; ?></a> </div>
										<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									</div>
								</div>
							</article>
		      	<?php endwhile; ?>    
	      	<?php wp_reset_query(); ?>
				</div>
			</section>
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<section class="small-12 large-11 small-centered columns">
				<ul class="row grid effect-2" id="grid">
		    	<?php 
				    $offset = htmlspecialchars(trim($_GET['offset']));
				    if ($offset == '') { $offset = 2; }
		    		$the_query = new WP_Query( array("posts_per_page" => 8, "offset" => $offset) ); 
		    	?>
					<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

						<li class="isotope-align small-12 medium-4 large-3 left columns loadMore">
							<?php get_template_part("content","standard-post"); ?>
						</li>

					<?php endwhile; endif; ?>
		      <?php wp_reset_query(); ?>
	      </ul>
			</section>
		</div>
		<div class="row">
			<div  class="page-nav small-10 small-centered text-center columns">
				<a rel="<?php echo site_url(), $_SERVER['REQUEST_URI']; ?>" class="load-more">				
					<span class="loadMoreText">View more</span>
				</a>
			</div>
		</div>
	</div>

	<div class="related-section">
		<div class="top-section people">
			<div class="row"> 
	 			<section class="small-10 madium-4 text-center small-centered columns">
					<h1>PEOPLE</h1>
					<h2><a href="/the-people">Meet the contributors</a></h2>
				</section>
			</div>			
		</div>
		<div class="row"> 
			<section class="small-12 large-11 small-centered text-center columns main-grid">
				<div class="row">
					<?php include(locate_template('content-people-all.php')); ?>
				</div>
			</section>
		</div>
	</div>

<?php get_footer(); ?>
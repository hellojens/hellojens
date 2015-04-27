<?php /* Template Name: People */ get_header(); ?>


	<div class="top-section people">
		<div class="row"> 
 			<section class="small-6 text-center small-centered columns">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<h1><?php echo get_the_content(); ?></h1>

      	<?php endwhile; endif;?>    

			</section>
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<section class="small-11 small-centered columns main-grid">
				<div class="row">

	    	<?php $the_query = new WP_Query( array("post_type" => "people" ) ); ?>
				<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

					<div class="small-12 large-3 left columns">
						<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "home-post")); ?>>
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
							</a>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2>
							<?php if (function_exists('the_subheading')) { the_subheading('<p>', '</p>'); } ?>
						</article>
					</div>

				<?php endwhile; endif; ?>
	      <?php wp_reset_query(); ?>

			</section>
		</div>
	</div>


<?php get_footer(); ?>
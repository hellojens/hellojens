<?php /* Template Name: About */ get_header(); ?>


	<div class="top-section about-page">
		<div class="row"> 
 			<section class="small-10 small-centered columns">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="small-12 columns">
						<h2><?php echo get_the_content(); ?></h2>
					</div>
					<div class="small-12 medium-6 left columns">
						<p><?php the_field("about_extra_info"); ?></p>
					</div>

      	<?php endwhile; endif;?>    

			</section>
		</div>			
	</div>

	<div class="about-social">
		<div class="row"> 

				<?php if( get_field('about_facebook') ): ?>
					<section class="small-12 small-centered columns social-block">
						<div class="row">
							<div class="small-10 small-centered columns">
								<a class="social-link" target="_blank" href="<?php the_field("about_facebook"); ?>">Facebook ></a>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_field('about_twitter') ): ?>
					<section class="small-12 small-centered columns social-block">
						<div class="row">
							<div class="small-10 small-centered columns">
								<a class="social-link" target="_blank" href="<?php the_field("about_facebook"); ?>">Twitter ></a>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php if( get_field('about_instagram') ): ?>
					<section class="small-12 small-centered columns social-block">
						<div class="row">
							<div class="small-10 small-centered columns">
								<a class="social-link" target="_blank" href="<?php the_field("about_instagram"); ?>">Instagram ></a>
							</div>
						</div>
					</section>
				<?php endif; ?>

			</section>
		</div>
	</div>


<?php get_footer(); ?>
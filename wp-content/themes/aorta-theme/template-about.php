<?php /* Template Name: About */ get_header(); ?>


	<div class="top-section about-page">
		<div class="row"> 
 			<section class="small-10 small-centered columns">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<h2><?php echo get_the_content(); ?></h2>

      	<?php endwhile; endif;?>    

			</section>
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<section class="small-10 medium-11 small-centered columns main-grid">
				<div class="row">

				</div>
			</section>
		</div>
	</div>


<?php get_footer(); ?>
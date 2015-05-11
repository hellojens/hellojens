<?php /* Template Name: People */ get_header(); ?>


	<div class="top-section people">
		<div class="row"> 
 			<section class="small-11 medium-6 large-5 text-center small-centered columns">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>
					<h2><?php echo get_the_content(); ?></h2>

      	<?php endwhile; endif;?>    

			</section>
		</div>			
	</div>

	<div class="content-section">
		<div class="row"> 
			<section class="small-12 medium-11 small-centered columns main-grid">
				<div class="row">
					<?php include(locate_template('content-people-all.php')); ?>
				</div>
			</section>
		</div>
	</div>


<?php get_footer(); ?>
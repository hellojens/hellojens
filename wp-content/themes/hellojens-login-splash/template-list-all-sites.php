<?php /* Template Name: List all multisites */ get_header(); ?>

	<main class="login-box-wrapper small-12 medium-6 large-4 small-centered text-center columns" role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


                <?php // list all multi sites
                $blogs = get_blog_list( 0, 'all' );
                if ( 0 < count( $blogs ) ) :
                  foreach( $blogs as $blog ) : 
                    switch_to_blog( $blog[ 'blog_id' ] );

                    if ( get_theme_mod( 'show_in_home', 'on' ) !== 'on' ) {
                        continue;
                    }
                    $blog_details = get_blog_details( $blog[ 'blog_id' ] );
                    ?>
                      <b><?php echo  $blog_details->blogname; ?></b>
                <?php endforeach; 
                endif; 
                ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>

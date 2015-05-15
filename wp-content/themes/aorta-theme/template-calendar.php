<?php /* Template Name: Calendar */ 
// Enqueue Google Calendar Events CSS.
wp_enqueue_style( 'google-calendar-events-public' );

// Enqueue Google Calendar Events JS.
wp_enqueue_script( 'google-calendar-events-public' );

get_header(); ?>

  <div class="top-section category">
    <div class="row"> 
      <section class="small-11 medium-5 text-center small-centered columns">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <h2><?php echo get_the_content(); ?></h2>

        <?php endwhile; endif; ?>    

      </section>
    </div>      
  </div>

  <div class="content-section">
    <div class="row"> 
      <section class="small-11 large-10 small-centered columns">
        <?php echo do_shortcode( '[gcal id="160"]' ); ?>
      </section>

<!--       <section class="small-12 large-11 small-centered columns">
        <ul class="row grid effect-2" id="grid">
          <?php 
            $offset = htmlspecialchars(trim($_GET['offset']));
            if ($offset == '') { $offset = 0; }
            $the_query = new WP_Query( array("posts_per_page" => "16", "post_type" => "calendar","offset" => $offset) ); 
          ?>
          <?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

            <li class="isotope-align small-12 medium-11 left columns loadMore">
              <?php include(locate_template('content-calendar-post.php')); ?>
            </li>

          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </ul>
      </section> -->

    </div>

  </div>

<?php get_footer(); ?>
<?php get_header(); ?>

  <div class="top-section category">
    <div class="row"> 
      <section class="small-11 medium-5 text-center small-centered columns">

          <?php 
            $currentCat = get_query_var('cat');
            $the_query = new WP_Query( array("posts_per_page" => "1", "cat" => $currentCat) ); 
          ?>
          <?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>


          <h1><?php single_cat_title(); ?></h1>
          <h2><?php echo category_description(""); ?></h2>

        <?php endwhile; endif;?>    

      </section>
    </div>      
  </div>

  <div class="content-section">
    <div class="row"> 
      <section class="small-12 large-11 small-centered columns">
        <ul class="row grid effect-2" id="grid">
          <?php 
            $offset = htmlspecialchars(trim($_GET['offset']));
            if ($offset == '') { $offset = 0; }
            // Get current category 
            $currentCat = get_query_var('cat');
            $the_query = new WP_Query( array("posts_per_page" => "16", "cat" => $currentCat,"offset" => $offset) ); 
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
          <img class="puff"src="<?php echo get_template_directory_uri(); ?>/img/svg-loaders/oval.svg">
          <span class="loadMoreText">View more</span>
        </a>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

<?php get_header(); ?>

  <div class="top-section category">
    <div class="row"> 
      <section class="small-5 text-center small-centered columns">
        <h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); ?><span style="color: #143C37;"><?php echo get_search_query(); ?></span></h2>
      </section>
    </div>      
  </div>

  <div class="content-section">
    <div class="row"> 
      <section class="small-10 medium-11 small-centered columns">
        <ul class="row grid effect-2" id="grid">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
          <img class="puff"src="<?php echo get_template_directory_uri(); ?>/img/svg-loaders/puff.svg">
          <span class="loadMoreText">Load more</span>
        </a>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

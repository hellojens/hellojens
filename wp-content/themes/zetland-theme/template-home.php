<?php
/*
Template Name: Home
*/
get_header(); ?>


  <?php 
  // INTRO VIDEO
  $args = array( 'post_type' => 'page', "posts_per_page" => "1", "offset" => "1"); 
  $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="section-wrapper full-page intro">
      <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), full ); ?>
      <div class="background-image" style="background-image: url('<?php echo $featuredimage[0]; ?>');"></div>

      <div class="row">
        <div class="small-12 large-10 small-centered columns" role="main">

            <?php remove_filter ("the_content", "wpautop"); ?>
            <h1><?php the_content(); ?></h1>

        </div>
      </div>

    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>


  <!-- // BERTEL QUOTE -->

  <div class="section-wrapper quote">
    <div class="small-11 small-centered columns">

    <?php 
    $the_query = new WP_Query( array("post_type" => "quote", "posts_per_page" => "1" ) ); 
    if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
      <?php include(locate_template('content-quote.php')); ?>
     <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>


  <?php 
  // KICKSTART & STATS 
  $args = array( 'post_type' => 'page', "posts_per_page" => "1", "offset" => "2"); 
  $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="section-wrapper kickstart">
      <div class="small-11 small-centered columns">

        <div class="row">
          <div class="small-5 columns">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="small-7 columns">
            <p><?php the_content(); ?></p>
          </div>
        </div>

        <div class="row stats strike-top">
          <div class="small-12 columns">
            <h2><span class="orange-text">200</span> nye medlemmer, <span class="orange-text">384.031</span> nye kroner</h2>
          </div>
        </div>

      </div>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>


  <?php 
  // MINIFEST INTRO
  $args = array( 'post_type' => 'page', "posts_per_page" => "1", "offset" => "3"); 
  $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="section-wrapper manifest-intro">
      <div class="small-11 small-centered columns">

        <div class="row menifest-intro-item">
          <div class="small-7 columns">
            <h1>Vi skærer gennem støjen.</h1>
            <p>Vi fokuserer på historier med perspektiv, og vi udgiver aldrig flere, end du kan nå at læse.</p>
          </div>
          <div class="small-5 columns">
            <img src="http://zetland.hellojens.dev/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
        </div>

        <div class="row menifest-intro-item">
          <div class="small-5 columns">
            <img src="http://zetland.hellojens.dev/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
          <div class="small-7 columns text-right">
            <h1>Vi fortæller ikke at noget sker.</h1>
            <p>Vi fortæller, hvorfor det sker, og hvad det <i>betyder</i>.</p>
          </div>
        </div>

        <div class="row menifest-intro-item">
          <div class="small-7 columns">
            <h1>Hos os tilhører mediet læserne.</h1>
            <p>Vi vil udnytte vores medlemmers viden og bede dem gøre hinanden og os klogere.</p>
          </div>
          <div class="small-5 columns">
            <img src="http://zetland.hellojens.dev/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
        </div>

      </div>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>


  <!-- MINIFEST LIST -->

  <div class="section-wrapper manifest-list">
    <div class="small-11 small-centered columns">

    <?php 
    $counter = 0;
    $the_query = new WP_Query( array("post_type" => "manifest" ) ); 
    if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

      <div class="row list-item">
        <div class="small-5 columns">
          <?php $counter++; ?>
          <h1><?php echo $counter; ?></h1>
        </div>
        <div class="small-7 columns">
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
        </div>
      </div>

     <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
  </div>

  <!-- CALL TO ACTION  -->

  <div class="section-wrapper default-sand-box strike-top">
    <div class="small-11 small-centered columns">

      <div class="row">
        <div class="small-5 columns">
          <h2>De støtter os allerede</h2>
        </div>
        <div class="small-7 columns">
          <h3>Hop med om bord</h3>
          <p>Bliv pionermedlem og vær med til at skabe Danmarks nye kvalitetsmedie.</p>
          <a class="button" href="">￼Bliv medlem</a>
        </div>
      </div>

    </div>
  </div>

  <!-- BERTEL QUOTE -->

  <div class="section-wrapper quote">
    <div class="small-11 small-centered columns">
    <?php 
    $counter = 0;
    $the_query = new WP_Query( array("post_type" => "quote",  "posts_per_page" => "1", "offset" => "1" ) ); 
    if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
      <?php include(locate_template('content-quote.php')); ?>
     <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <!-- THE PEOPLE  -->

  <div class="section-wrapper people">
    <div class="small-11 small-centered columns">
      <?php 
      // PEOPLE INTRO
      $args = array( 'post_type' => 'page', "posts_per_page" => "1", "offset" => "4"); 
      $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="row people-intro">
          <div class="small-5 columns">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="small-7 columns">
            <p><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; endif; 
      wp_reset_postdata(); ?>

        <div class="row people-item">
        <?php 
        $counter = 0;
        $the_query = new WP_Query( array("post_type" => "people" ) ); 
        if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

          <div class="small-3 left text-center columns">
            <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), peopleImage ); ?>
            <img class="person" src="<?php echo $featuredimage[0]; ?>">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <?php $image = get_field('signatur'); $link = get_field('link', $image['ID']); ?>
            <img class="signatur" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>

         <?php endwhile; endif; 
         wp_reset_postdata(); ?>

        </div>
    </div>
  </div>


  <!-- QUESTIONS  ACCORDION -->

  <div class="section-wrapper qanda strike-top">
    <div class="small-11 small-centered columns">
      <div class="row">
        <div class="small-5 columns">
          <h2>13 spørgsmål om det nye Zetland</h2>
        </div>
        <div class="small-7 columns">
          
          <div id="accordion">

          <?php  $the_query = new WP_Query( array("post_type" => "qanda", ) ); 
          if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

            <h3 class="accordion-toggle"><?php the_title(); ?></h3>
            <div class="accordion-content">
              <p><?php the_content(); ?></p>
            </div>

          <?php endwhile; endif; 
          wp_reset_postdata(); ?>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- PETER QUOTE -->

  <div class="section-wrapper quote">
    <div class="small-11 small-centered columns">
    <?php 
    $counter = 0;
    $the_query = new WP_Query( array("post_type" => "quote",  "posts_per_page" => "1", "offset" => "2" ) ); 
    if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
      <?php include(locate_template('content-quote.php')); ?>
     <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <!-- THE END -->


<?php get_footer(); ?>
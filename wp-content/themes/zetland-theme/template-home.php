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
      <div class="video-wrapper">
        <iframe id="intro-video" src="https://player.vimeo.com/video/129290878?api=1&player_id=player1&?title=0&amp;byline=0&amp;portrait=0&amp;color=FA5700" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>      
      <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), full ); ?>
      <div class="background-image" style="background-image: url('<?php echo $featuredimage[0]; ?>');"></div>
      <div class="row">
        <div class="small-11 medium-10 small-centered columns" role="main">

          <?php remove_filter ("the_content", "wpautop"); ?>
          <h1><?php the_content(); ?></h1>
          <h1>
            <a class="play-video" href="#">
              <img width="100" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/play-button.png">
               Se filmen
            </a>
          </h1>

        </div>
      </div>

    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>


  <!-- // QUOTE 1 -->

  <div id="change-header" class="section-wrapper quote">
    <div class="small-12 medium-11 small-centered columns">

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
      <div class="small-12 medium-11 small-centered columns">

        <div class="row">
          <div class="small-12 medium-5 columns">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="small-12 medium-7 columns">
            <p><?php the_content(); ?></p>
          </div>
        </div>

        <div class="row stats">
          <div class="small-12 columns">
            <div class="strike-top"></div>
            <?php dynamic_sidebar( 'kickstart-widgets' ); ?>
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

    <div id="change-header-black" class="section-wrapper manifest-intro">
      <div class="small-12 medium-11 small-centered columns">

        <div class="row menifest-intro-item">
          <div class="small-12 medium-5 columns hide-for-medium-up">
            <img src="http://zetland.hellojens.com/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
          <div class="small-12 medium-7 columns">
            <h1>Vi skærer gennem støjen.</h1>
            <p>Vi fokuserer på historier med perspektiv, og vi udgiver aldrig flere, end du kan nå at læse.</p>
          </div>
          <div class="small-12 medium-5 columns text-center show-for-medium-up">
            <img src="http://zetland.hellojens.com/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
        </div>

        <div class="row menifest-intro-item">
          <div class="medium-5 columns medium-text-center">
            <img src="http://zetland.hellojens.com/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
          <div class="small-12 medium-7 columns medium-text-right small-text-left">
            <h1>Vi fortæller ikke at noget sker.</h1>
            <p>Vi fortæller, hvorfor det sker, og hvad det <i>betyder</i>.</p>
          </div>
        </div>

        <div class="row menifest-intro-item">
          <div class="small-12 medium-5 columns hide-for-medium-up">
            <img src="http://zetland.hellojens.dev/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
          <div class="small-12 medium-7 columns">
            <h1>Hos os tilhører mediet læserne.</h1>
            <p>Vi vil udnytte vores medlemmers viden og bede dem gøre hinanden og os klogere.</p>
          </div>
          <div class="small-12 medium-5 columns text-center show-for-medium-up">
            <img src="http://zetland.hellojens.dev/wp-content/uploads/sites/5/2015/05/Screen-Shot-2015-05-26-at-09.41.48.png">
          </div>
        </div>

      </div>
    </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>


  <!-- MINIFEST LIST -->

  <div id="change-header-white" class="section-wrapper manifest-list">
    <div class="small-12 medium-11 small-centered columns">

    <?php 
    $counter = 0;
    $the_query = new WP_Query( array("post_type" => "manifest" ) ); 
    if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

      <div class="row list-item">
        <div class="medium-5 columns">
          <?php $counter++; ?>
          <h1><?php echo $counter; ?></h1>
        </div>
        <div class="medium-7 columns">
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
        </div>
      </div>

     <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
  </div>

  <!-- CALL TO ACTION  -->

  <div class="section-wrapper default-sand-box strike-top">
    <div class="small-12 medium-11 small-centered columns">

      <div class="row">
        <div class="medium-5 columns">
          <h2>De støtter os allerede</h2>
        </div>
        <div class="medium-7 columns">
          <h3>Hop med om bord</h3>
          <p>Bliv pionermedlem og vær med til at skabe Danmarks nye kvalitetsmedie.</p>
          <a class="button" href="">￼Bliv medlem</a>
        </div>
      </div>

    </div>
  </div>

  <!-- QUOTE 2 -->

  <div class="section-wrapper quote">
    <div class="small-12 medium-11 small-centered columns">
    <?php 
    $counter = 0;
    $the_query = new WP_Query( array("post_type" => "quote",  "posts_per_page" => "1", "offset" => "1" ) ); 
    if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
      <?php include(locate_template('content-quote.php')); ?>
     <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>



  <!-- BACKERS  -->

  <div class="section-wrapper backers">
    <div class="small-12 medium-10 small-centered columns">
      <div class="row">
      <?php 
      $the_query = new WP_Query( array("post_type" => "backers" ) ); 
      if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

        <div class="backers-item left small-12 medium-6 columns">
          <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), peopleImageSmall ); ?>
          <img class="person" src="<?php echo $featuredimage[0]; ?>">
          <div class="content">
            <h3><?php the_title(); ?></h3>
            <?php if (function_exists('the_subheading')) { the_subheading('<h5>', '</h5>'); } ?> 
          </div>
        </div>

       <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>


  <!-- THE PEOPLE  -->

  <div class="section-wrapper people">
    <div class="small-12 medium-11 small-centered columns">
      <?php 
      // PEOPLE INTRO
      $args = array( 'post_type' => 'page', "posts_per_page" => "1", "offset" => "4"); 
      $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="row people-intro">
          <div class="medium-5 columns">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="medium-7 columns">
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

          <div class="small-6 medium-3 left text-center columns">
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
    <div class="small-12 medium-11 small-centered columns">
      <div class="row">
        <div class="medium-5 columns">
          <h2>13 spørgsmål om det nye Zetland</h2>
        </div>
        <div class="medium-7 columns">
          
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
    <div class="small-12 medium-11 small-centered columns">
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

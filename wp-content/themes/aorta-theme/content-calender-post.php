<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "calender-post")); ?>>
  <div class="small-3 columns">
    <div class="post-thumbnail">  
      <?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
    </div>
  </div>
  <div class="small-9 columns">
    <div class="post-content">
      <?php
        $category = get_the_category();
        $category_id = $category[0]->cat_ID;
        $category_link = get_category_link( $category_id );
      ?>
      <h2><?php the_title(); ?></h2>
      <div class="date">Date of event: <?php the_time('d.m.Y'); ?> </div>
      <p><?php the_content(); ?></p>
    </div>
  </div>
</article>
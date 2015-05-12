<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "home-post")); ?>>
  <div class="post-thumbnail">  
    <div class="spinner"><div class="dot1"></div><div class="dot2"></div></div> <!-- // Loading -->
    <a href="<?php the_permalink(); ?>">
      <div class="post-overlay">
        <div class="post-overlay-content">
          <div class="author"><?php the_author(); ?></div>
          <p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,12); ?></p>
        </div>
      </div>
    </a>
    <?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
  </div>
  <div class="post-content">
    <?php
      $category = get_the_category();
      $category_id = $category[0]->cat_ID;
      $category_link = get_category_link( $category_id );
    ?>
    <div class="date"><?php the_time('d.m.Y'); ?> | <a href="<?php echo esc_url( $category_link ); ?>"><?php echo $category[0]->cat_name; ?></a> </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2>
  </div>
</article>
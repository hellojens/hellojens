<article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "home-post")); ?>>
  <div class="post-thumbnail">  
    <div class="spinner"><div class="dot1"></div><div class="dot2"></div></div> <!-- // Loading -->
    <a href="<?php the_permalink(); ?>">
      <div class="post-overlay">
        <div class="author"><?php the_author(); ?></div>
        <p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,12); ?></p>
      </div>
    </a>
    <?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
  </div>
  <div class="date"><?php the_time('d.m.Y'); ?></div>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2>
</article>
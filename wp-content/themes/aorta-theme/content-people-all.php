<?php $the_query = new WP_Query( array("post_type" => "people" ) ); ?>
<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

  <div class="small-6 medium-4 large-3 left columns">
    <article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "people-post")); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(post, array( 'alt' => get_the_title(), 'title' => get_the_title()) ); ?>
      </a>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></h2>
      <?php if (function_exists('the_subheading')) { the_subheading('<p>', '</p>'); } ?>
    </article>
  </div>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
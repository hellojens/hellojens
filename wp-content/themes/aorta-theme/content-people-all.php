<?php $the_query = new WP_Query( array("post_type" => "people" ) ); ?>
<?php if (have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

  <div class="small-6 medium-4 large-3 left columns">
    <article id="post-<?php the_ID(); ?>" <?php post_class(array("class" => "people-post")); ?>>
      <div class="round-wrapper">
      <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), post ); ?>
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo $featuredimage[0]; ?>">
        </a>
      </span>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php if (function_exists('the_subheading')) { the_subheading('<p>', '</p>'); } ?>
    </article>
  </div>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
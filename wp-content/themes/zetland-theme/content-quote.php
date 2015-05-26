<div class="row">
  <div class="small-5 columns">
    <?php $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id(), quoteImage ); ?>
    <img class="person" src="<?php echo $featuredimage[0]; ?>">
    <div class="quote-details">
      <img class="quote-sign" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/quote-sign.png">
      <h4><?php the_title(); ?></h4>
      <?php if (function_exists('the_subheading')) { the_subheading('<h5>', '</h5>'); } ?> 
   </div>
  </div>
  <div class="small-7 columns">
    <p><?php the_content(); ?></p>
  </div>
</div>
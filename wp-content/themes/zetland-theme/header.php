<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		} elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title( '' );
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/android-chrome-192x192.png" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/smalltile.png" />
    <meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/mediumtile.png" />
    <meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/largetile.png" />

    <script src="//use.typekit.net/yov6ayz.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>	

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action( 'foundationpress_layout_start' ); ?>

  <?php 
  // INTRO VIDEO
  $args = array( 'post_type' => 'page', "posts_per_page" => "1", "offset" => "0"); 
  $the_query = new WP_Query( $args ); if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="section-wrapper full-page start">
      <div class="row">
        <div class="small-11 small-centered  columns">
    			<?php // $featuredimage = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), full ); ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/zetland-kort.svg">
          <h1>
            Det nye <span class="white-text">Zetland</span>. <br>
            <span class="top-taglines typeit"></span>
          </h1>
        </div>
      </div>
    </div>
    
  <?php endwhile; endif; wp_reset_postdata(); ?>

	<?php // get_template_part( 'parts/off-canvas-menu' ); ?>

	<?php get_template_part( 'parts/top-bar' ); ?>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>

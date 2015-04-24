<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300,600' rel='stylesheet' type='text/css'>


		<?php wp_head(); ?>
		<script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

	</head>
	<body <?php body_class(); ?>>

    <div class="splash-background">

      <div id="particles-js">
        <div class="background-count">
          <span></span>
        </div>
      </div>

    	<header class="header clear" role="banner">

          <h1>HelloJens</h1>
          <h2 class="textjam-headline slide">
            <span></span> 
            <span class="textjam-words-wrapper waiting">
              <b class="is-visible">The Madeby Network </b>

                <?php // list all multi sites
                $blogs = get_blog_list( 0, 'all' );
                if ( 0 < count( $blogs ) ) :
                  foreach( $blogs as $blog ) : 
                    switch_to_blog( $blog[ 'blog_id' ] );

                    if ( get_theme_mod( 'show_in_home', 'on' ) !== 'on' ) {
                        continue;
                    }
                    $blog_details = get_blog_details( $blog[ 'blog_id' ] );
                    ?>
                      <b><?php echo  $blog_details->blogname; ?></b>
                <?php endforeach; 
                endif; 
                ?>

            </span>
          </h2>

          			<!-- nav 
              	<nav class="nav" role="navigation">
          				<?php// html5blank_nav(); ?>
          			</nav> -->
          			<!-- /nav -->
    	</header>
    </div>

    <!-- wrapper -->
    <div class="row splash-template">

      <div class="small-12 small-centered columns">

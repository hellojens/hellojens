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

    <!-- wrapper -->
    <div class="all">

      <div class="row">
        <div class="small-12 small-centered columns">

          <div class="row">
            <div class="small-12 small-centered columns">

            	<header class="header clear" role="banner">

                <nav class="nav" role="navigation">
                  <?php // html5blank_nav(); ?><br><br>
                </nav>

                <div class="row main-navigation">
                  <div class="small-2 large-4 text-center columns">
                    <a href="/">Reading</a>
                  </div>
                  <div class="small-8 large-4 logo text-center columns">
                    <a  href="/">
                      <span style="visibility: hidden;">home</span>
                      <!-- <img  src="<?php echo get_template_directory_uri(); ?>"> -->
                    </a>
                  </div>
                  <div class="small-2 large-4 text-center columns">
                    <a href="/people">People</a>
                  </div>
                </div>
            	</header>
            </div>

          </div>


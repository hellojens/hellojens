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

    <!-- <div class="splash-background"> -->

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
              <b class="is-visible">User Experience designer. </b>
              <b>Frontend developer. </b>
              <b>Wordpress expert. </b>
              <b>I'm in constant pursuit </b>
              <b>.. and available for hire!</b>
            </span>
          </h2>
    	</header>
      <div class="connect">
        <ul>
          <li><a href="https://twitter.com/jensjkdk" target="_blank">Twitter</a></li>
          <li><a href="mailto:hire@hellojens.com">hire@hellojens.com</a></li>
          <li><a href="http://dk.linkedin.com/in/hellojens" target="_blank">LinkedIn</a></li>
        </ul>
      </div>
    <!-- </div> -->


    <!-- wrapper -->
    <div class="row splash-template">

      <div class="small-12 small-centered columns">

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/manifest.json">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <script src="//use.typekit.net/kuk5mac.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

		<?php wp_head(); ?>
		<script>
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

	</head>
	<body <?php body_class(); ?> >

    <!-- wrapper -->
    <div class="all">

      <div class="row small-collapse">
        <div class="small-12 small-centered columns">

          <div class="row small-collapse">
            <div class="small-12 small-centered columns">

            	<header class="header clear" role="banner" >

                <nav class="row top-nav first" role="navigation">
                  <div class="small-12 text-center columns ">
                    <?php top_nav(); ?>
                  </div>
                </nav>

                <nav class="row main-navigation">
                  <div class="small-12 medium-10 small-centered columns">
                    <div class="row">
                      <div class="small-3 medium-3 medium-text-right columns">
                        <a class="start" href="/">Reading</a>
                      </div>
                      <div class="small-6 medium-6 logo text-center columns">
                        <a href="/">
                          <img width="250px" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Aorta logo">
                        </a>
                      </div>
                      <div class="small-3 medium-3 left medium-text-left columns">
                        <a class="list-people looknice" href="/the-people">People</a>
                      </div>
                    </div>
                    <a href="#" class="search-loop searchlink hide-for-small-only">
                      <svg width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                          <g id="Page-1" stroke="none" stroke-width="1"  fill-rule="evenodd" sketch:type="MSPage">
                              <g class="searchsvg" id="Fill-254-+-Fill-256" sketch:type="MSLayerGroup" transform="translate(1.000000, 1.000000)" fill="#133C37">
                                  <path d="M12.8983,1.8922 C11.1633,1.8922 9.5303,2.5682 8.3023,3.7952 C5.7683,6.3292 5.7683,10.4552 8.3023,12.9892 C9.5303,14.2162 11.1633,14.8922 12.8983,14.8922 C14.6343,14.8922 16.2673,14.2162 17.4953,12.9892 C18.7223,11.7612 19.3983,10.1272 19.3983,8.3922 C19.3983,6.6562 18.7223,5.0232 17.4953,3.7952 C16.2673,2.5682 14.6343,1.8922 12.8983,1.8922 M12.8983,16.8922 C10.6283,16.8922 8.4943,16.0082 6.8883,14.4032 C3.5733,11.0882 3.5733,5.6962 6.8883,2.3812 C8.4943,0.7762 10.6283,-0.1078 12.8983,-0.1078 C15.1693,-0.1078 17.3033,0.7762 18.9093,2.3812 C20.5143,3.9872 21.3983,6.1212 21.3983,8.3922 C21.3983,10.6632 20.5143,12.7972 18.9093,14.4032 C17.3033,16.0082 15.1693,16.8922 12.8983,16.8922" id="Fill-254" sketch:type="MSShapeGroup"></path>
                                  <path d="M0.8772,21.4137 C0.6212,21.4137 0.3652,21.3157 0.1702,21.1207 C-0.2208,20.7297 -0.2208,20.0977 0.1702,19.7067 L6.5342,13.3427 C6.9252,12.9517 7.5582,12.9517 7.9482,13.3427 C8.3392,13.7327 8.3392,14.3657 7.9482,14.7567 L1.5842,21.1207 C1.3892,21.3157 1.1332,21.4137 0.8772,21.4137" id="Fill-256" sketch:type="MSShapeGroup"></path>
                              </g>
                          </g>
                      </svg>
                    </a>
                  </div>
                </nav>

                <nav class="row secondary-nav top-nav" role="navigation">
                  <div class="small-12 text-center columns">
                    <?php category_nav(); ?>
                  </div>
                </nav>

            	</header>
            </div>

            <div class="search-wrapper">
              <div class="row">
                <div class="small-11 small-centered columns">

                  <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
                    <input class="search-input" type="search" name="s" placeholder="Type here to search..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type here to search...'">
                    <!-- <button class="search-submit" type="submit" role="button">Search</button> -->
                  </form>

                </div>
              </div>
            </div>
          
          </div>
          <div class="transition-wrapper">

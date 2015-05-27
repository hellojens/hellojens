<?php
/*
Plugin Name: Kickstarter Tracker Widget
Plugin URI: http://protoseyewear.com
Description: A widget that displays Kickstarter stats
Version: 0.1
Author: protoseyewear
Author URI: http://protoseyewear.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

/**
* include css style sheet
*/
add_action( 'wp_enqueue_scripts','kickstarter_css');

if (!function_exists('kickstarter_css')) {
	
	function kickstarter_css() {

		wp_register_style( 'kickstarter', plugins_url('css/kickstarter.css',__FILE__ ));
		wp_enqueue_style('kickstarter');

	}
}

			require 'lib/simple_html_dom.php';

/**
* get Kickstarter Stats
*/

if (!function_exists('kickstarter_getStats')) {

	function kickstarter_getStats($url) {


    		// create array to store stats
    		$results = array();

			// use curl to grab html
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$html = curl_exec($ch);
			curl_close($ch);

			if (!$html) {
        		$err = "<br />cURL error number:" .curl_errno($ch);
        		$err .= "<br />cURL error:" . curl_error($ch);
    			$results['error'] = $err;
    			return $results;
    		}

    		// parse the html into a DOMDocument
    		$dom = new DOMDocument();
    		@$dom->loadHTML($html);

    		// create new DOMXPath object
    		$xpath = new DOMXPath($dom);

    		// get pledged goal and percentage raised
    		$elements = $xpath->query('//*[@id="pledged"]');

    		// get element and import into xml
    		foreach ($elements as $e) {
     			$xml = simplexml_import_dom($e);
    		}
		
    		// store goal amount
			$att = 'data-goal';
			$results['data-goal'] = (string)$xml->attributes()->$att;
			$results['data-goal'] = (float) $results['data-goal'];
			$results['data-goal'] = number_format($results['data-goal'], 0, '.', ',');

			// format and store percent raised
			$att = 'data-percent-raised';
			$results['data-percent-raised'] = (string)$xml->attributes()->$att;
			$results['data-percent-raised'] = $results['data-percent-raised']*100;
			$results['data-percent-raised'] = round($results['data-percent-raised']);

			// get current pledges
			$elements = $xpath->query('//*[@id="pledged"]/data');

    		// get element and import into xml
    		foreach ($elements as $e) {
    			if($e->nodeValue) {
     				$results['data-pledged'] = $e->nodeValue;
     			}
    		}

    		// get backers count
			$elements = $xpath->query('//*[@id="backers_count"]');

			// get element and import into xml
    		foreach ($elements as $e) {
     			$xml = simplexml_import_dom($e);
    		}
		
    		// store backers total
			$att = 'data-backers-count';
			$results['data-backers-count'] = (string)$xml->attributes()->$att;

    		// get time remaining
			$elements = $xpath->query('//*[@id="project_duration_data"]');

			// get element and import into xml
    		foreach ($elements as $e) {
     			$xml = simplexml_import_dom($e);
    		}
		
    		// store goal amount
			$att = 'data-hours-remaining';
			$results['data-hours-remaining'] = (string)$xml->attributes()->$att;

			// calculate unit of time and convert hours if need be
		
			$seconds = (($results['data-hours-remaining']*60)*60);

			if (($results['data-hours-remaining'] > 0) && ($seconds < 60)) {
		
				$results['time-unit'] = "sekunder tilbage";
				$results['data-hours-remaining'] = round($seconds);
		
			} elseif (($results['data-hours-remaining'] > 0) && ($results['data-hours-remaining'] < 2)) {
			
				$results['time-unit'] = "minutter tilbage";
				$results['data-hours-remaining'] = $results['data-hours-remaining']*60;
				$results['data-hours-remaining'] = round($results['data-hours-remaining']);
		
			} elseif (($results['data-hours-remaining'] > 2) && ($results['data-hours-remaining'] < 24)) {
		
				$results['time-unit'] = "timer tilbage";
				$results['data-hours-remaining'] = round($results['data-hours-remaining']);
		
			} else {
		
				$results['time-unit'] = "dage tilbage";
				$results['data-hours-remaining'] = $results['data-hours-remaining']/24;
				$pieces = explode('.', $results['data-hours-remaining']);
				$results['data-hours-remaining'] = $pieces[0];
			
			} 
		return $results;
	}

}

/**
* Widget
*/


add_action( 'widgets_init', 'kickstarter_widget' );

if (!function_exists('kickstarter_widget')) {

	function kickstarter_widget() {

		register_widget( 'Kickstarter_Widget' );

	}
}


class Kickstarter_Widget extends WP_Widget {

	function Kickstarter_Widget() {
		$widget_ops = array( 'classname' => 'kickstarter', 'description' => __('A widget that displays the authors name ', 'kickstarter') );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'kickstarter-widget' );
		
		$this->WP_Widget( 'kickstarter-widget', __('Kickstarter Tracker', 'kickstarter'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$title = apply_filters('widget_title', $instance['title'] );
		$url = $instance['url'];
		$allow = $instance['allow'];

		$results = kickstarter_getStats($url);

		echo $before_widget;

		// Display the widget title 
		if ( $title )
			echo $before_title . $title . $after_title;

		if ( $results['data-backers-count'])
			echo '<h2><span class="orange-text">'.$results['data-backers-count'].'</span> nye medlemmer, ';

		if ( $results['data-pledged'])
			echo '<span class="orange-text">'.$results['data-pledged'].'</span> nye kroner</h2>';

		if ( $results['data-percent-raised'])
			echo '<div class="kickstarter-num"><span id="countKick1">'.$results['data-percent-raised'].'</span>%</div>';
			echo '<div class="kickstarter-tag">finansieret</div><br />';
			echo '<div class="progress"><span class="meter" style="max-width: 100%; width: '.$results['data-percent-raised'].'%"></span></div>';

		if (($results['data-hours-remaining']) && ($results['data-backers-count']))
			echo '<div class="kickstarter-num" id="countKick2">'.$results['data-hours-remaining'].'</div>';
			echo '<div class="kickstarter-tag">'.$results['time-unit'].'</div>';
			$timeleft = $results['data-hours-remaining'] * 0.3;
			echo '<div class="progress"><span class="meter" style="max-width: 100%; width: '.$timeleft.'%"></span></div><br>';

		
		// echo '<br /><a href="'.$url.'" class="kickstarter-button" title="Back this project" target="_blank">Back This Project</a><br />';

	
		if ($allow)
				
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['url'] = strip_tags( $new_instance['url'] );
		$instance['allow'] = strip_tags( $new_instance['allow'] );

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 'title' => __('Kickstarter', 'kickstarter'), 'url' => __('', 'kickstarter'), 'allow' => __('yes', 'kickstarter') );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

	
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'kickstarter'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>


		<p>
			<label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e('Kickstarter Url:', 'kickstarter'); ?></label>
			<input id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" value="<?php echo $instance['url']; ?>" style="width:100%;" />
		</p>


		<p>
			<label for="<?php echo $this->get_field_id( 'allow' ); ?>"><?php _e('Show our link:', 'kickstarter'); ?></label>
			<? if ($instance['allow']) { ?>
				<input name="<?php echo $this->get_field_name( 'allow' ); ?>" id="<?php echo $this->get_field_id( 'allow' ); ?>" type="checkbox" checked="yes">
			<? } else { ?>
				<input name="<?php echo $this->get_field_name( 'allow' ); ?>" id="<?php echo $this->get_field_id( 'allow' ); ?>" type="checkbox">
		<? } ?>
			
		</p>

	<?php
	}
}


/**
* Widget 2
*/


add_action( 'widgets_init', 'kickstarter_widget2' );

if (!function_exists('kickstarter_widget2')) {

	function kickstarter_widget2() {

		register_widget( 'Kickstarter_Widget2' );

	}
}


class Kickstarter_Widget2 extends WP_Widget {

	function Kickstarter_Widget2() {
		$widget_ops = array( 'classname' => 'kickstarter2', 'description' => __('A widget that displays the authors name ', 'kickstarter2') );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'kickstarter-widget2' );
		
		$this->WP_Widget( 'kickstarter-widget2', __('Kickstarter Tracker Top Bar', 'kickstarter'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$title = apply_filters('widget_title', $instance['title'] );
		$url = $instance['url'];
		$allow = $instance['allow'];

		$results = kickstarter_getStats($url);

		echo $before_widget;

		// Display the widget title 
		if ( $title )
			echo $before_title . $title . $after_title;

		if ( $results['data-backers-count'])
			echo '<li><div class="kickstarter-num"><span id="count1" class="orange-text">'.$results['data-backers-count'].'</span> / 2000 </div>';
			echo '<div class="kickstarter-tag"> nye medlemmer</div> </li>';

		// if ( $results['data-pledged'])
		// 	echo '<li><div class="kickstarter-num"><span class="orange-text">'.$results['data-pledged'].'</span> </div> nye kroner</li>';

		if ( $results['data-percent-raised'])
			echo '<li><div class="kickstarter-num"><span id="count2" class="orange-text">'.$results['data-percent-raised'].'</span> %</div>';
			echo '<div class="kickstarter-tag">finansieret</div></li>';

		if (($results['data-hours-remaining']) && ($results['data-backers-count']))
			echo '<li><div class="kickstarter-num"><span id="count3" class="orange-text">'.$results['data-hours-remaining'].'</span> / 30</div>';
			echo '<div class="kickstarter-tag">'.$results['time-unit'].'</div></li>';
			$timeleft = $results['data-hours-remaining'] * 0.3;
		
		// echo '<br /><a href="'.$url.'" class="kickstarter-button" title="Back this project" target="_blank">Back This Project</a><br />';

	
		if ($allow)
				
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['url'] = strip_tags( $new_instance['url'] );
		$instance['allow'] = strip_tags( $new_instance['allow'] );

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 'title' => __('Kickstarter', 'kickstarter'), 'url' => __('', 'kickstarter'), 'allow' => __('yes', 'kickstarter') );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

	
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'kickstarter'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>


		<p>
			<label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e('Kickstarter Url:', 'kickstarter'); ?></label>
			<input id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" value="<?php echo $instance['url']; ?>" style="width:100%;" />
		</p>


		<p>
			<label for="<?php echo $this->get_field_id( 'allow' ); ?>"><?php _e('Show our link:', 'kickstarter'); ?></label>
			<? if ($instance['allow']) { ?>
				<input name="<?php echo $this->get_field_name( 'allow' ); ?>" id="<?php echo $this->get_field_id( 'allow' ); ?>" type="checkbox" checked="yes">
			<? } else { ?>
				<input name="<?php echo $this->get_field_name( 'allow' ); ?>" id="<?php echo $this->get_field_id( 'allow' ); ?>" type="checkbox">
		<? } ?>
			
		</p>

	<?php
	}
}

?>
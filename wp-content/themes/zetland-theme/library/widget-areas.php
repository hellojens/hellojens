<?php
if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'menu-widgets',
	  'name' => __( 'Menu widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
	
	register_sidebar(array(
	  'id' => 'kickstart-widgets',
	  'name' => __( 'Kickstart widgets', 'foundationpress' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	  'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));


}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>

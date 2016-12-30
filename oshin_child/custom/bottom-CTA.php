<?php /* Call to action at bottom of page */
/* first add widget area */
    if ( function_exists('register_sidebar') ){
        register_sidebar(
    		array(
               'name' => __( 'Bottom Call to Action ', 'be-themes' ),
               'id'   => 'rmmz-bottom-cta',
               'description'   => __( 'Widget area (above footer)', 'be-themes' ),
               'before_widget' => '<div class="%2$s widget">',
               'after_widget'  => '</div>',
               'before_title'  => '<h6>',//
               'after_title'   => '</h6>',
    		)
    	);
    }
/* next put widget area in at the begining of the footer.php
/* mods 
    // zig - add widget area above bottom-widgets for reach CTA

	if (is_active_sidebar('reach-bottom-cta')) {
		echo '<footer id="reach-bottom-cta">';
			echo '<div id="reach-bottom-cta-wrap" class="be-wrap be-row clearfix">';
			dynamic_sidebar( 'reach-bottom-cta');
			echo '</div>';
		echo '</footer>';
	}
*/

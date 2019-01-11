<?php

function menu_roles( $args = '' ) {
 
	if( is_user_logged_in() ) { 
		$args['menu'] = 'Private';
	} else { 
		$args['menu'] = 'Public';
	} 
		return $args;
}
add_filter( 'wp_nav_menu_args', 'menu_roles' );

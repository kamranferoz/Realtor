<?php
if ( function_exists( 'ere_social_networks' ) ) {

	$args = array(
		'container'       => 'div',
		'container_class' => 'rh_var2_social_icons',
		'replace_icons'   => array(
			'facebook' => 'fa-facebook-official',
			'linkedin' => 'fa-linkedin-square',
			'youtube'  => 'fa-youtube-play',
		),
	);

	ere_social_networks( $args );
}
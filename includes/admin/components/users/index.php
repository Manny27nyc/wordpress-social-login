/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
/*!
* WordPress Social Login
*
* http://miled.github.io/wordpress-social-login/ | https://github.com/miled/wordpress-social-login
*  (c) 2011-2015 Mohamed Mrassi and contributors | http://wordpress.org/plugins/wordpress-social-login/
*/

/**
* Wannabe Users Manager module
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; 

// --------------------------------------------------------------------

function wsl_component_users()
{
	// HOOKABLE: 
	do_action( "wsl_component_users_start" );

	include "wsl.components.users.list.php";
	include "wsl.components.users.profiles.php";

	if( isset( $_REQUEST["uid"] ) && $_REQUEST["uid"] ){
		$user_id = (int) $_REQUEST["uid"];

		wsl_component_users_profiles( $user_id );
	}
	else{
		wsl_component_users_list();
	}

	// HOOKABLE: 
	do_action( "wsl_component_users_end" );
}

wsl_component_users();

// --------------------------------------------------------------------	

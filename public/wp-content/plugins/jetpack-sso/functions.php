[code]/*
Plugin Name: JetPack SSO Functionality Plugin
Description: Require WordPress.com 2-step authentication and remove login form
Version: 0.1
License: GPL
Author: Philip J Beyer
Author URI: https://gettingsecuritydone.com/
*/[/code]
add_filter( 'jetpack_sso_require_two_step', '__return_true' );
add_filter( 'jetpack_remove_login_form', '__return_true' );

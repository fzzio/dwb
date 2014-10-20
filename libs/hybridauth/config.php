<?php
	#AUTOGENERATED BY HYBRIDAUTH 2.1.2 INSTALLER - Thursday 13th of February 2014 10:57:24 AM

/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

if( array_shift(explode(".",$_SERVER['HTTP_HOST'])) == 'www'){
	$subd = 'www.';
}else{
	$subd = '';
}
//"base_url" => "http://".$subd."altavozcm.com/web/220V/libs/hybridauth/",

return 
	array(
		"base_url" => "http://www.dioma.com.ec/libs/hybridauth/",

		"providers" => array ( 
			// openid providers
			"OpenID" => array (
				"enabled" => false
			),

			"AOL"  => array ( 
				"enabled" => true 
			),

			"Yahoo" => array ( 
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"Google" => array ( 
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"Facebook" => array ( 
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"Twitter" => array ( 
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			// windows live
			"Live" => array ( 
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),

			"MySpace" => array ( 
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"LinkedIn" => array ( 
				"enabled" => false,
				"keys"    => array ( "key" => "", "secret" => "" ) 
			),

			"Foursquare" => array (
				"enabled" => false,
				"keys"    => array ( "id" => "", "secret" => "" ) 
			),

			// gowalla application credentials
			"Instagram" =>   array ( 
				"enabled"   => true,
				"keys"   => array ( "id" => "0e9ff8b27a394e8d9522797e62c1b426", "secret" => "41314712351245ed816a8527158fe5c9" )
			), 
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => false,

		"debug_file" => ""
	);

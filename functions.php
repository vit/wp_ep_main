<?php

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'ep-main' ),
		'main-a'    => __( 'Main Menu a', 'ep-main' ),
		'main-b'    => __( 'Main Menu a', 'ep-main' ),
		'social' => __( 'Social Links Menu', 'ep-main' ),
	) );



// Disable nl to p
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


// Register wp-materialize-navwalker
//require_once get_template_directory() . '/wp_materialize_navwalker.php';


//$theme_param = $_REQUEST['set_theme'] ? $_REQUEST['set_theme'] : ($_COOKIE['my_theme'] ? $_COOKIE['my_theme'] : 'a');
$theme_param = $_REQUEST['set_theme'] ? $_REQUEST['set_theme'] : $_COOKIE['my_theme'];
$GLOBALS['my_theme'] = in_array($theme_param, ['a','b']) ? $theme_param : 'a';

setcookie('my_theme', $GLOBALS['my_theme'], 0, '/');
//setcookie('my_theme', $_GLOBALS['my_theme'], 1);
//echo $_GLOBALS['my_theme'];

?>
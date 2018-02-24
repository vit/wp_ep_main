<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<?php switch($GLOBALS['my_theme']) { ?>
<?php case 'a': ?>
<div id="main-navigation" class="mmain-navigation white bblue llighten-2" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'ep_main' ); ?>">
<div class="container">

    <div class="nnav-wrapper bblack-text" iid="main-navigation">
    	<div class="logo-wrapper"
    	><a href="/" class="brand-logo blue-text text-darken-3"><img class="brand-logo-img" src="<?php bloginfo('template_directory'); ?>/img/ep-logo.png"></a
    	></div>
		<!--a href="#" data-target="mobile-nav" class="sidenav-trigger blue-text text-darken-3"><i class="material-icons">menu</i></a-->

	<?php /*wp_nav_menu( array(
		'theme_location' => 'main',
//		'menu_id'        => 'top-menu',

		'menu_class'     => 'mmenu sidenav',
		'menu_id'        => 'mobile-nav',
//		'items_wrap'     => '<ul id="%1$s" class="%2$s"><li class="mobile-header"><p>Menu</p></li>%3$s</ul><div class="clear"></div>'
	) );*/ ?>
	<?php /*wp_nav_menu( array(
		'theme_location' => 'main',
		'menu_id'        => 'main-menu',

		'menu_class' => 'left hide-on-med-and-down'
	) );*/ ?>

<!--div class="search-wrapper"><ul
><li><a href="#"><i class="material-icons">search</i></a></li
></ul></div-->

    <div id="main-menu-container" class="right">
	<?php wp_nav_menu( array(
		'menu' => 'main-a',
		'theme_location'=>'main-a',
		'menu_id'        => 'main-menu',
		'menu_class' => 'right hide-on-med-and-down',
//		'menu_class' => 'left hide-on-med-and-down',
//		'walker' => new wp_materialize_navwalker()
	) ); ?>
	</div>




	<?php /* if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; */ ?>

	</div>
</div>
</div>

<?php break; ?>

<?php case 'b': ?>
<nav id="main-navigation" class="mmain-navigation white bblue llighten-2" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'ep_main' ); ?>">
<div class="container">

    <div class="nav-wrapper black-text" iid="main-navigation">
      <a href="/" class="brand-logo blue-text text-darken-3"><img class="brand-logo-img" src="<?php bloginfo('template_directory'); ?>/img/ep-logo.png"></a>
      <a href="#" data-target="mobile-nav" class="sidenav-trigger blue-text text-darken-3"><i class="material-icons">menu</i></a>

	<?php wp_nav_menu( array(
		'theme_location' => 'main',
//		'menu_id'        => 'top-menu',

		'menu_class'     => 'mmenu sidenav',
		'menu_id'        => 'mobile-nav',
	) ); ?>
	<?php /*wp_nav_menu( array(
		'theme_location' => 'main',
		'menu_id'        => 'main-menu',

		'menu_class' => 'left hide-on-med-and-down'
	) );*/ ?>

    <div id="main-menu-container">
	<?php wp_nav_menu( array(
		'menu' => 'main-b',
		'theme_location'=>'main-b',
		'menu_id'        => 'main-menu',
//		'menu_class' => 'right hide-on-med-and-down',
		'menu_class' => 'left hide-on-med-and-down',
//		'walker' => new wp_materialize_navwalker()
	) ); ?>
	</div>

	<?php /* if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; */ ?>

	</div>
</div>
</nav>

<?php break; ?>

<?php } ?>


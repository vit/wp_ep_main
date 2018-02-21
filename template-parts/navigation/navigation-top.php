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


<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
<div class="container">

    <div class="nav-wrapper">
      <a href="/" class="brand-logo blue-text text-darken-3">Logo</a>
      <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>

	<!--button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php /*
//		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
//		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		*/ ?>
		<i class="material-icons">menu</i>
	</button-->
	<!--a href="#" data-target="mobile-demo" class="sidenav-trigger menu-toggle" aria-controls="top-menu" aria-expanded="false"><i class="material-icons">menu</i></a-->

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
//		'menu_id'        => 'top-menu',

		'menu_class'     => 'mmenu sidenav',
		'menu_id'        => 'mobile-nav',
//		'items_wrap'     => '<ul id="%1$s" class="%2$s"><li class="mobile-header"><p>Menu</p></li>%3$s</ul><div class="clear"></div>'
	) ); ?>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',

		'menu_class' => 'left hide-on-med-and-down'
	) ); ?>

	<?php /* if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; */ ?>

<!--ul iid="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul-->

	</div>
</div>
</nav><!-- #site-navigation -->



<nav id="top-navigation" class="top-navigation hide-on-med-and-down bblue ddarken-3" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'ep_main' ); ?>">
<div class="container" sstyle="display: flex;">

    <!--div class="nnav-wrapper" sstyle="display: flex;"-->

    <div id="top-menu-container" class="right">
	<?php wp_nav_menu( array(
		'menu' => 'top',
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
		'menu_class' => 'right hide-on-med-and-down'
	) ); ?>
	</div>

	<!--a href="#" class="right"><i class="material-icons">search</i></a-->

	<!--/div-->
</div>
</nav>


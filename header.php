<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
        <!--link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>?<?php echo time() ?>"-->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?<?php echo time() ?>">

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/<?php echo $GLOBALS['my_theme'] ?>.css?<?php echo time() ?>">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <!--div id="page" class="site"-->

            <header id="masthead" class="site-header" role="banner">

                <?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

        		<?php if ( 1 or has_nav_menu( 'top' ) ) : ?>
        			<div class="navigation-top">
        				<div class="wrap">
        					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        				</div>
        			</div>
        		<?php endif; ?>

        		<?php if ( 1 or has_nav_menu( 'main' ) ) : ?>
        			<div class="navigation-main">
        				<div class="wrap">
        					<?php get_template_part( 'template-parts/navigation/navigation', 'main' ); ?>
        				</div>
        			</div>
        		<?php endif; ?>

<div id="breadcrumbs" class="ggrey ddarken-1  bblue ddarken-3 grey darken-1">
<div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">First</a>
        <a href="#!" class="breadcrumb">Second</a>
        <a href="#!" class="breadcrumb">Third</a>
      </div>
    </div>
</div>
</div>


	        </header>

        	<main class="site-content-contain">
<!-- header end -->

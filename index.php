<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">

        <!--Import materialize.css-->
        <!--link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>?<?php echo time() ?>">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <!--div id="page" class="site"-->

            <header id="masthead" class="site-header" role="banner">

                <?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

        		<?php if ( has_nav_menu( 'top' ) ) : ?>
        			<div class="navigation-top">
        				<div class="wrap">
        					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        				</div><!-- .wrap -->
        			</div><!-- .navigation-top -->
        		<?php endif; ?>

<nav id="breadcrumbs" class="ggrey ddarken-1  blue darken-3">
<div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">First</a>
        <a href="#!" class="breadcrumb">Second</a>
        <a href="#!" class="breadcrumb">Third</a>
      </div>
    </div>
</div>
</nav>


	        </header><!-- #masthead -->


        	<main class="site-content-contain">
            <div class="container">
        		<div id="content" class="site-content">



<div class="hh-widget-wrapper">
    <script class="hh-script" src="https://api.hh.ru/widgets/vacancies/employer?employer_id=746659&locale=RU&links_color=1560b2&border_color=1560b2&show_region=true"></script>
</div>



                </div>
            </div>
            </main>

            <footer class="page-footer blue darken-3">
                <div class="container">
                    eqwrtwetywtrey eruty eryu eryu etyu rtyu rty rt ert wer twerthwero thweortiuwherot erot wert wert weyrt wrty rty rety ertu reu er
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2018 ЦНИИ &laquo;Электроприбор&raquo;
                        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                    </div>
                </div>
            </footer>

        <!--/div-->




        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--JavaScript at end of body for optimized loading-->
        <!--script type="text/javascript" src="js/materialize.min.js"></script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".sidenav").sidenav();
                $(".button-collapse").sidenav();
            });
        </script>
    </body>
</html>
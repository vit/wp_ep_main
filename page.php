<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php
if ( $GLOBALS['my_theme'] == 'a' ) {
?>

<div class='the_post' sstyle="border: thick green solid; pposition: absolute; ttop: 0;">

        <?php
        $bg_url = "";
        if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
            if ( ! empty( $large_image_url[0] ) ) {
                $bg_url = esc_url( $large_image_url[0] );
//                echo '<img class="top-image" src="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
            }
        }
        // see https://developer.wordpress.org/reference/functions/get_the_post_thumbnail/
        ?>

    <div class="top-block" style=
    "position: relative; background-image: url(<?php echo $bg_url ?>); background-size: cover; bbackground-attachment: fixed; background-position-y: center; zz-index: 1; bborder: thick red solid;"
    >


    <div class="top-block-content" style=
    "width: 100%; position: absolute; bottom: 0; hheight: 100%; display: flex; flex-direction: column; justify-content: flex-end; z-index: 1; bborder: thin red solid;"
    ss="display: flex; flex-direction: column; justify-content: flex-end; background-image: url(<?php echo $bg_url ?>); background-size: cover; bbackground-attachment: fixed; background-position-y: center; z-index: 1; bborder: thin red solid;"
    >

        <div style="bborder: thick green solid; pposition: absolute; bbottom: 0; width: 100%;">
        <div class="container" style="display: flex; align-items: flex-end; bborder: thin red solid; pposition: absolute; bbottom: 0;">
            <h1 style="color: white; text-shadow: 1px 1px 2px black;"><?php the_title() ?></h1>
            <?php
                $custom_fields = get_post_custom();
                $page_custom_menu = $custom_fields['page-custom-menu'][0];
                if ($page_custom_menu) {
            ?>
            <div id="page-custom-menu-container" class="right" style="margin-left: auto;">
            	<?php wp_nav_menu( array(
            		'menu' => $page_custom_menu,
            		'theme_location'=>'page-custom-menu',
            		'menu_id'        => 'page-custom-menu-products',
            		'menu_class' => 'right hide-on-med-and-down',
            	) ); ?>
        	</div>
            <?php
                }
            ?>
        </div>
        </div>
        <?php if ($GLOBALS['my_theme'] != 'b') get_template_part( 'template-parts/navigation/navigation', 'breadcrumbs' ); ?>
    </div>
    </div>
    <div style="bborder: thick blue solid;">
        <?php the_content() ?>
    </div>
</div>

<?php
}
?>



<?php
if ( $GLOBALS['my_theme'] == 'b' ) {
?>

<div class='the_post'>
    <div class="top-block">
        <?php get_template_part( 'template-parts/navigation/navigation', 'breadcrumbs' ); ?>

        <div class="container" style="display: flex; align-items: flex-end;">
            <h1><?php the_title() ?></h1>
            <?php
                $custom_fields = get_post_custom();
                $page_custom_menu = $custom_fields['page-custom-menu'][0];
                if ($page_custom_menu) {
            ?>
            <div id="page-custom-menu-container" class="right" style="margin-left: auto;">
            	<?php wp_nav_menu( array(
            		'menu' => $page_custom_menu,
            		'theme_location'=>'page-custom-menu',
            		'menu_id'        => 'page-custom-menu-products',
            		'menu_class' => 'right hide-on-med-and-down',
            	) ); ?>
        	</div>
            <?php
                }
            ?>
        </div>

    </div>
    <div>
        <?php the_content() ?>
    </div>
</div>


<?php
}
?>




<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?>

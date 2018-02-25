<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--img class="top-image" src="http://elektropribor.spb.ru/wp-content/uploads/2018/02/0_9ca14_6f115f4_orig.jpeg"-->

<?php //echo get_the_post_thumbnail( $_post->ID, 'thumbnail' ); ?>
<?php //echo get_the_post_thumbnail( $_post->ID, 'large' ); ?>
<?php //echo get_the_post_thumbnail( $_post->ID, 'full' ); ?>

<?php
if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
    if ( ! empty( $large_image_url[0] ) ) {
//        echo '<img class="top-image" src="' . esc_url( $large_image_url[0] ) . '" title="' . the_title_attribute( array( 'echo' => 0 ) ) . '">';
?>
<style>
body{
    background-image: url('<?php echo $large_image_url[0]; ?>');
    background-size: cover;
}
</style>
<?php

    }
}
// see https://developer.wordpress.org/reference/functions/get_the_post_thumbnail/
?>

<div class='the_post'>

    <div class="container">
        <h1><?php the_title() ?></h1>
    </div>

<!--nav id="breadcrumbs0" class="ggrey ddarken-1  bblue ddarken-3 grey darken-4">
<div class="container">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">First</a>
        <a href="#!" class="breadcrumb">Second</a>
        <a href="#!" class="breadcrumb">Third</a>
      </div>
    </div>
</div>
</nav-->


<?php /*
if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('
<p id="breadcrumbs">','</p>
');
}
*/ ?>

<div id="breadcrumbs" class="breadcrumbs ggrey ddarken-1  bblue ddarken-3 ggrey ddarken-1 llight-blue bblue ddarken-4">
<div class="container">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
</div>


    <div>
        <?php the_content() ?>
    </div>
</div>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?>

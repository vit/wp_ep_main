<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<img class="top-image" src="http://elektropribor.spb.ru/wp-content/uploads/2018/02/0_9ca14_6f115f4_orig.jpeg">

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

<div id="breadcrumbs" class="breadcrumbs ggrey ddarken-1  bblue ddarken-3 grey darken-1">
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

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<img class="top-image" src="http://elektropribor.spb.ru/wp-content/uploads/2018/02/0_9ca14_6f115f4_orig.jpeg">

<div class='the_post'>
    <!--h1><?php the_title() ?></h1-->
    <div>
        <?php the_content() ?>
    </div>
</div>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?>

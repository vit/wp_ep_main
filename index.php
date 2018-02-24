<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class='the_post'>
    <!--h1><?php the_title() ?></h1-->
    <div>
        <?php the_content() ?>
    </div>
</div>


<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


            <!-- div class="container">
        		<div id="content" class="site-content">


<div class="row">

<div class="col m12 l6">
<h3 class="center">Вакансии</h3>
<div class="hh-widget-wrapper">
    <script class="hh-script" src="https://api.hh.ru/widgets/vacancies/employer?employer_id=746659&locale=RU&links_color=1560b2&border_color=1560b2&show_region=true&title="></script>
</div>
</div>

<div class="col m12 l6">
<h3 class="center">Вакансии</h3>
<div class="hh-widget-wrapper">
    <script class="hh-script" src="https://api.hh.ru/widgets/vacancies/employer?employer_id=746659&locale=RU&links_color=1560b2&border_color=1560b2&show_region=true&title="></script>
</div>
</div>

</div>



                </div>
            </div -->



<?php get_footer(); ?>

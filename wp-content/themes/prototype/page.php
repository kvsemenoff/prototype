<?php get_header(); ?>       
   <div class="container">
    	<div>
        	<div class="wrap_container clearfix">
                <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
                </div>
                <div class="article">
                	<h1><?php the_title(); ?></h1>
                    <?php  while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
<?php get_footer(); ?>
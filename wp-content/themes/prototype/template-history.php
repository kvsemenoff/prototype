<?php 
/*
Template name: История 
*/
?>
<?php get_header(); ?>     
<div class="container">
	<div>
    	<div class="breadcrumbs">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
        </div>
        <div class="about">
        	<h1>История развития</h1>
            <?php  while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <div class="wrap_history">
            <?php $query = new WP_Query( array( 'post_type' => 'history' ) ); ?>
            <?php while ( $query->have_posts() ) { ?>
            <?php $query->the_post(); ?>
            <div class="history clearfix">
                <div class="history_side">
                    <span class="history_date"><?php the_title(); ?></span>
                    <?php the_content(); ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
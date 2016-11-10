<?php 
/*
Template name: Страница производства (single)
*/
?>
<?php get_header(); ?>

<body class="container_body">
    <!-- sidebar_mobile -->
    
    <!-- /sidebar_mobile -->
    <div class="wraper">
        <div class="overlay_search"></div>
       
        
       
        
        <!-- container -->
        <div class="container">
            <div>
                <div class="breadcrumbs">
                    <a href="#">Главная</a>\
                    <a href="#">Технологии</a>\
                    <span>Трафаретная печать (шелкография)</span>  
                </div>
                <div class="wrap_container clearfix wrap_container_tech">
                    <div class="content">
                        <?php 
                            while ( have_posts() ) : the_post();
                                
                                the_content();
                            endwhile; 
                        ?>
                    </div>
                    <div class="sidebar">
                        <div class="side_title">Технологии</div>
                        <div class="tech_menu">
                            <ul>
                                <?php 
                                  wp_reset_query(); 
                                  $wp_query = new WP_Query(array(
                                   'post_type' => '[manufacture]',
                                   'posts_per_page' =>15,
                                   'post_status' => 'publish',
                                   'caller_get_posts'=> 1)
                                   );
                                  while ($wp_query->have_posts()) : $wp_query->the_post();
                                ?>
                                <li><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
        
       
    </div>
</body>
        
<?php get_footer(); ?>
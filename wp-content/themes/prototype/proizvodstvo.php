<?php 
/*
Template name: Производство
*/
?>
<?php get_header(); ?>

<body class="container_body">
        <!-- container -->
        <div class="container">
            <div>
                <div class="breadcrumbs">
                    <a href="#">Главная</a>\
                    <span>Технологии</span>  
                </div>
                <div class="about">
                    <h1>Технологии</h1>
                    <p>Технологическая составляющая нашей компании предоставлена современным оборудованием высокой мощности, без которого невозможна работа любой типографии.</p>
                </div>
                
                <div class="technology_links">
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
        <!-- /container -->
        
       
</body>
        
<?php get_footer(); ?>
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
                            <? 
                               $args = array(
                                 'theme_location'  => '',
                                 'menu'            => 'manufacture', 
                                 'container_class' => '', 
                                 'container_id'    => '',
                                 'menu_class'      => 'menu', 
                                 'menu_id'         => '',
                                 'echo'            => true,
                                 'fallback_cb'     => 'wp_page_menu',
                                 'before'          => '',
                                 'after'           => '',
                                 'link_before'     => '',
                                 'link_after'      => '',
                                 'items_wrap'      => '<ul>%3$s</ul>',
                                 'depth'           => 0
                               );
                               wp_nav_menu($args ); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
        
       
    </div>
</body>
        
<?php get_footer(); ?>
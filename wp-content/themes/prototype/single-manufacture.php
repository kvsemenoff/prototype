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
                                <li><a href="#">Цифровая УФ печать</a></li> 
                                <li><a href="#">Высокая печать</a></li> 
                                <li><a href="#">Сублимационная печать</a></li> 
                                <li><a href="#" class="tech_menu_active">Трафаретная печать(шелкография)</a></li> 
                                <li><a href="#">Тампонная печать</a></li> 
                                <li><a href="#">Лазерная гравировка</a></li> 
                                <li><a href="#">Машинная вышивка</a></li> 
                                <li><a href="#">Цифровая печать</a></li> 
                                <li><a href="#">Офсетная печать</a></li> 
                                <li><a href="#">Тиснение</a></li> 
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
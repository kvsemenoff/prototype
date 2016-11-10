<?php 
/*
Template name: Производство
*/
?>
<?php get_header(); ?>

<body class="container_body">
    <!-- sidebar_mobile -->
    <div class="" id="sidebar">
        <!-- nav -->
        <div class="nav">
            <ul>                                                
                <li><a href="#">О компании</a></li>
                <li class="nav_categoty"><span class="open_nav">Услуги</span>
                    <ul class="hidden_nav">
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Услуги</a></li>
                    </ul>
                </li>
                <li class="nav_categoty"><span class="open_nav">Производство</span>
                    <ul class="hidden_nav">
                        <li><a href="#">Производство</a></li>
                        <li><a href="#">Производство</a></li>
                        <li><a href="#">Производство</a></li>
                    </ul>
                </li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">F.A.Q.</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <!-- /nav -->
        <div class="social">
            <a href="#" class="soc_ic" target="_blank"><img src="img/svg/social/vk.svg" alt="" /></a>
            <a href="#" class="soc_ic" target="_blank"><img src="img/svg/social/instagram-logo.svg" alt="" /></a>
        </div>
        <a href="tel:84232090108" class="head_tel">+7 (423) 209-01-08</a>
        <a href="#" class="back_call">обратный звонок</a>
    </div>
    <!-- /sidebar_mobile -->
    <div class="wraper">
        <div class="overlay_search"></div>
        <!-- header -->
        <div class="header">
            <div>
                <div class="wrap_head clearfix">
                    <a href="#" data-toggle=".container_body" id="sidebar-toggle"></a>
                    <div class="left_head">
                        <div class="social">
                            <a href="#" class="soc_ic" target="_blank"><img src="img/svg/social/vk.svg" alt="" /></a>
                            <a href="#" class="soc_ic" target="_blank"><img src="img/svg/social/instagram-logo.svg" alt="" /></a>
                        </div>
                        <button class="search_pull"></button>
                        <div class="wrap_head_search">
                            <div class="search">
                                <form>
                                    <input type="text" class="search_inp" placeholder="поиск по сайту" />
                                    <input type="submit" class="search_btn" />
                                </form>
                            </div>
                        </div>
                        <div class="search_field">например: <a href="#">печать визиток</a></div>
                    </div>
                    <a href="#" class="logo">
                        <img src="img/icons/logo.png" alt="" />
                        <p>ПРОТОТИП</p>
                        <span>ПЕРЕДОВЫЕ ТЕХНОЛОГИИ ПЕЧАТИ</span>
                    </a>
                    <div class="right_head">
                        <a href="tel:84232090108" class="head_tel">+7 (423) 209-01-08</a>
                        <a href="#" class="back_call">обратный звонок</a>
                        <a href="#" class="blue_btn">оформить заявку</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /header -->
        
        <!-- wrap_nav -->
        <div class="wrap_nav dark_blue_bg">
            <div>
                <div class="nav">
                    <ul>                                                
                        <li><a href="#">О компании</a></li>
                        <li class="nav_has_children"><a href="#">Услуги</a>
                            <ul>
                                <li><a href="#">Услуги</a></li>
                                <li><a href="#">Услуги</a></li>
                                <li><a href="#">Услуги</a></li>
                            </ul>
                        </li>
                        <li class="nav_has_children"><a href="#">Производство</a>
                            <ul>
                                <li><a href="#">Производство</a></li>
                                <li><a href="#">Производство</a></li>
                                <li><a href="#">Производство</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Портфолио</a></li>
                        <li><a href="#">F.A.Q.</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /wrap_nav -->
        
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
        
       
    </div>
</body>
        
<?php get_footer(); ?>
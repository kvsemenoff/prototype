<?php 
error_reporting(E_ALL)
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/fancySelect.css" type="text/css" rel="stylesheet"/>
	<link href="<?php echo get_template_directory_uri(); ?>/css/swiper.css" type="text/css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

			
<body class="container_body">
	<!-- sidebar_mobile -->
    <div class="" id="sidebar">
    	<!-- nav -->
        <div class="nav">
           <?php
            $args = array(
            'theme_location'  => '',
            'menu'            => 'Главное меню', 
            'container'       => false, 
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
        <!-- /nav -->
        <div class="social">
            <a href="#" class="soc_ic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/social/vk.svg" alt="" /></a>
            <a href="#" class="soc_ic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/social/instagram-logo.svg" alt="" /></a>
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
                        	<a href="#" class="soc_ic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/social/vk.svg" alt="" /></a>
                            <a href="#" class="soc_ic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/social/instagram-logo.svg" alt="" /></a>
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
                    <div class="logo">
                    	<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo.png" alt="" />
                        <p>ПРОТОТИП</p>
                        <span>ПЕРЕДОВЫЕ ТЕХНОЛОГИИ ПЕЧАТИ</span></a>
                    </div>
                    <div class="right_head">
                    	<a href="tel:84232090108" class="head_tel">+7 (423) 209-01-08</a>
                        <a onclick="$('.call_mod').arcticmodal()" href="#" class="back_call">обратный звонок</a>
                        <div style="display: none;">
                            <div class="box-modal modal_width_2 call_mod">
                                <div class="box-modal_close arcticmodal-close"></div>
                                <div class="modal modal_call">
                                    <div class="modal_title">Обратный звонок <p>Заполните пожалуйста анкету и мы вам перезвоним!</p></div>
                                    <div class="form_bg">
                                        <form>
                                            <div class="form_line">
                                                <span class="inp_title">Имя</span>                                          
                                                <input type="text" class="typical_inp_dark typical_inp_light"/>
                                            </div>
                                            <div class="form_line">
                                                 <span class="inp_title">Телефон</span>
                                                 <input type="tel" class="typical_inp_dark typical_inp_light"/>
                                            </div>
                                            <input type="submit" class="blue_btn_2" value="ОТПРАВИТЬ" /> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a onclick="$('.order_mod').arcticmodal()" href="#" class="blue_btn">оформить заявку</a>
                        <div style="display: none;">
                            <div class="box-modal modal_width_1 order_mod">
                                <div class="box-modal_close arcticmodal-close"></div>
                                <div class="modal modal_form">
                                    <div class="modal_title">Закажите услугу прямо сейчас, <span>или задайте любые вопросы</span></div>
                                    <div class="form_bg">
                                        <form>
                                            <div class="form_line">
                                                <span class="inp_title">Имя</span>                                          
                                                <input type="text" class="typical_inp_dark typical_inp_light"/>
                                            </div>
                                            <div class="wrap_form_line clearfix">
                                                <div class="form_line">
                                                    <span class="inp_title">Эл.почта</span>
                                                    <input type="email" class="typical_inp_dark typical_inp_light"/>
                                                </div>
                                                <div class="form_line">
                                                    <span class="inp_title">Телефон</span>
                                                    <input type="tel" class="typical_inp_dark typical_inp_light"/>
                                                </div>
                                            </div>
                                            <div class="form_line">
                                                <span class="inp_title">Интересующая услуга</span>
                                                <div class="light_select">
                                                    <select class="typical_select">
                                                        <option value="">- выберите услугу из списка -</option>
                                                        <option>Lorem Ipsum</option>
                                                        <option>Lorem Ipsum</option>
                                                        <option>Lorem Ipsum</option>
                                                        <option>Lorem Ipsum</option>
                                                        <option>Lorem Ipsum</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form_line">
                                                <span class="inp_title">Сообщение</span>
                                                <textarea  class="typical_inp_dark typical_inp_light"></textarea>
                                            </div>
                                            <input type="submit" class="blue_btn_2" value="ОТПРАВИТЬ" /> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /header -->
        
        <!-- wrap_nav -->
        <div class="wrap_nav dark_blue_bg">
        	<div>
            	<div class="nav">
                	<?php
            $args = array(
            'theme_location'  => '',
            'menu'            => 'Главное меню', 
            'container'       => false, 
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
        <!-- /wrap_nav -->
        
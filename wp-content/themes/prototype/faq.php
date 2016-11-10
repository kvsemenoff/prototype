<?php 
/*
Template name: FAQ
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
                    <a href="#" class="logo">
                    	<img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo.png" alt="" />
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
                    <span>F.A.Q.</span>  
                </div>
                <div class="faq_top">
                	<h1>F.A.Q. Вопрос-ответ</h1>
                    <div class="faq_top_info">
                    	<p>В данном разделе мы собрали все часто задаваемые вопросы и подробно ответили на каждый.</p>
                        <p>В случае если интересующего вас вопроса нет в списке, вы можете задать его используя <a href="#form_faq" class="scroll2">форму под списком вопросов</a>.</p>
                    </div>
                </div>
                <div class="faq">
                    <?php wp_reset_query(); ?>
                    <?php $wp_query = new WP_Query(array('post_type' => 'faq')); ?>
                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="faq_category">
                        <div class="faq_open"><?php the_title(); ?></div>
                        <div class="faq_hidden">
                            <p>
                                <?php echo get_the_content(); ?>
                            </p>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <!-- /container -->
        
        <!--  -->
        <div class="form_block" id="form_faq">
        	<div>
            	<div class="wrap_contact_form question_form clearfix">
                	<div class="form_contacts">
                    	<div class="contacts_photo">
                        	<img src="<?php echo get_template_directory_uri(); ?>/img/team.jpg" alt="" />
                        </div>
                        <div class="team_name">ИВАН ИВАНОВ</div>
                        <div class="team_job">специалист по работе с клиентами</div>
                        <div class="form_team">
                        	<div class="form_tel">
                            	<a href="tel:84232090108" class="head_tel">+7 (423) 209-01-08</a>
                                <a href="tel:84232268262" class="head_tel">+7 (423) 226-82-62</a>
                            </div>
                            <a href="#" class="back_call">заказать звонок</a>
                            <a href="mailto:2090108@gmail.com" class="form_mail">2090108@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact_form">
                    	<div class="form_title">Задайте свой вопрос <span>прямо сейчас</span></div>
                        <div class="form_bg">
                        	<form>
                            	<div class="form_line">
                                    <span class="inp_title inp_title_important">Имя</span>                                          
                                    <input type="text" class="typical_inp_dark typical_inp_light"/>
                                </div>
                                <div class="wrap_form_line clearfix">
                                	<div class="form_line">
                                    	<span class="inp_title inp_title_important">Эл.почта</span>
                                		<input type="email" class="typical_inp_dark typical_inp_light"/>
                                    </div>
                                    <div class="form_line">
                                    	<span class="inp_title">Телефон</span>
                                		<input type="tel" class="typical_inp_dark typical_inp_light"/>
                                    </div>
                                </div>
                                <div class="form_line">
                                    <span class="inp_title inp_title_important">Сообщение</span>
                                    <textarea  class="typical_inp_dark typical_inp_light"></textarea>
                                </div>
                                <div class="calc_form_btm clearfix"> 
                                    <div class="add_file add_file_2">
                                        <span class="inp_title">Прикрепить файл</span>
                                        <div class="calc_add_file">
                                            <label class="file_upload" for="file_upl">
                                                <span class="add_button">Обзор</span>
                                            </label>
                                            <input type="file" id="file_upl">
                                        </div>
                                        <p>Если к вопросу нужно прикрепить документ, сделайте это здесь. Вес до 2 Мб.</p>
                                    </div>
                                    <input type="submit" class="blue_btn_2" value="ОТПРАВИТЬ" /> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- / -->
        
<?php get_footer(); ?>
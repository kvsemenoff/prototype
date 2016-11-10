<?php 
/*
Template name: Контакты
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
                <div class="contacts_title">
                	<h1>Контакты</h1>
                </div>
            </div>
        </div>
        <!-- /container -->
        
        <div class="contacts_block">
        	<div>
            	<div class="wrap_contacts">
                	<div class="contacts_small contacts_tel">
                    	<a href="tel:84232090108" class="head_tel">+7 (423) 209-01-08</a>
                        <a href="tel:84232268262" class="head_tel">+7 (423) 226-82-62</a>
                    </div>
                    <div class="contacts_small contacts_link">
                    	<a href="#" class="bordered_btn">Заказать звонок</a>
                    </div>
                    <div class="contacts_small contacts_mail">
                    	<a href="mailto:order@dvprototype.ru">order@dvprototype.ru</a>
                    </div>
                    <div class="contacts_small contacts_loc">
                    	<p>г. Владивосток, ул. Пологая, 6б, офис 102</p>
                    </div>
                    <div class="contacts_small contacts_time">
                    	<p><span>Время работы типографии</span></p>
                        <p>Офис и производство:</p>
                        <p>пн-пт - с 10 до 19</p>
                        <p>суб, вос - выходные</p>
                    </div>
                    <a href="#" class="contacts_small contacts_download">
                    	<p>скачать</p>
                        <p>реквизиты компании</p>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- map -->
        <div class="map">
        <a class="dg-widget-link" href="http://2gis.ru/vladivostok/firm/3518966490230885/center/131.88947439193728,43.120109699017235/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Владивостока</a><div class="dg-widget-link"><a href="http://2gis.ru/vladivostok/firm/3518966490230885/photos/3518966490230885/center/131.88947439193728,43.120109699017235/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/vladivostok/center/131.8902,43.12005/zoom/16/routeTab/rsType/bus/to/131.8902,43.12005╎Прототип, рекламно-полиграфическое агентство?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Прототип, рекламно-полиграфическое агентство</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"height":400,"borderColor":"#BBBBBB","pos":{"lat":43.120109699017235,"lon":131.88947439193728,"zoom":16},"opt":{"city":"vladivostok"},"org":[{"id":"3518966490230885"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
        <!-- /map -->

        <!-- form_block -->
        <div class="form_block">
        	<div>
            	<div class="wrap_contact_form clearfix">
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
                    	<div class="form_title">Закажите услугу прямо сейчас, <span>или задайте любые вопросы</span></div> 
                        <div class="form_bg">
                        	<form>
                            	<div class="form_line">
                                    <span class="inp_title">Имя</span>                                          
                                    <input type="text" class="typical_inp_dark typical_inp_light"/>
                                </div>
                                <div class="form_line">
                                    <span class="inp_title">Эл.почта, телефон</span>                                          
                                    <input type="text" class="typical_inp_dark typical_inp_light"/>
                                </div>
                                <div class="form_line">
                                    <span class="inp_title">Сообщение</span>
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
                                        <p>Если у вас есть макет, или изображение похожего продукта – прикрепите его к сообщению. Вес до 2 Мб.</p>
                                    </div>
                                    <input type="submit" class="blue_btn_2" value="ОТПРАВИТЬ" /> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /form_block -->
        
<?php get_footer(); ?>
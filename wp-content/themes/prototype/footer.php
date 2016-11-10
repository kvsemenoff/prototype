        <!-- footer -->
        <footer>
        	<div class="wrap_nav_foot blue_bg">
            	<div>
                	<div class="wrap_n_f clearfix">
                    	<div class="nav_foot">
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
                        <div class="social_foot">
                        	<span>мы в соц.сетях</span>
                            <div class="wrap_soc_foot">
                            	<a href="#" class="soc_ic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/social/vk.svg" alt="" /></a>
                                <a href="#" class="soc_ic" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/social/instagram-logo.svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle_foot navy_bg">
            	<div>
                    <div class="foot_title">
                        <span>Офис продаж</span>
                    </div>
                    <div class="wrap_middle_foot">
                        <div class="middle_f middle_f_1"> 
                            <div class="foot_title_2">наш адрес</div>
                            <p>г. Владивосток, ул. Пологая, 66, офис 102</p>
                            <a href="#">посмотреть на карте</a>
                        </div>
                        <div class="middle_f middle_f_2"> 
                            <div class="foot_title_2">график работы</div>
                            <p>понедельник - пятница: с 9 до 18</p>
                        </div>
                        <div class="middle_f middle_f_3">
                            <div class="foot_title_2">справки по телефонам</div>  
                            <div class="tel_foot"><a href="tel:84232268262">+7 (423) 2-268-262, </a><a href="tel:84232090108">2-090-108</a></div>
                            <a href="mailto:2090108@gmail.com" class="mail_foot">2090108@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom_foot dark_blue_bg">
            	<div>
                	<div class="wrap_b_f clearfix">
                    	<div class="copyrights">
                        	<p>© 2016 ПРОТОТИП, РЕКЛАМНОЕ АГЕНТСТВО, ООО ПЕРЕДОВЫЕ ТЕХНОЛОГИИ ПЕЧАТИ</p>
                            <span>Все права защищены.</span>
                        </div>
                        <div class="development_foot">
                        	<p>Разработка сайта - <a href="https://kefirok.ru/" target="_blank">студия Кефирок</a></p>
                            <p>2016 год</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->
	</div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fancySelect.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput-1.2.2.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.arcticmodal-0.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</html>
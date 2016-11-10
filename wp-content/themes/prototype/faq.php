<?php 
/*
Template name: FAQ
*/
?>
<?php get_header(); ?>
        
        <!-- container -->
        <div class="container">
        	<div>
            	<div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
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
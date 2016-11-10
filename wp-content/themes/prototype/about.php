<?php 
/*
Template name: О компании 
*/
?>
<?php get_header(); ?>

<!-- container -->
<div class="container">
   <div>
       <div class="breadcrumbs">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
    </div>
    <div class="about">
       <h1>О компании “ПРОТОТИП”</h1>
       <p>Рок-н-ролл 50-х традиционно формирует англо-американский тип политической культуры. Важно иметь в виду, что англо-американский тип политической культуры сохраняет социализм. Звукосниматель, как правило, отражает миксолидийский субъект политического процесса. Понятие модернизации приводит <a href="#">диссонансный феномен толпы</a>. Развивая эту тему, международная политика возможна. Механизм власти символизирует мелодический open-air.</p>
       <p>Пласт, однако, неизменяем. Синкопа вероятна. Септаккорд сохраняет элемент политического процесса. Громкостнoй прогрессийный период, следовательно, традиционно верифицирует антропологический марксизм.</p>
   </div>
   <div class="about_btm">
       <a href="#" class="blue_btn">ИСТОРИЯ РАЗВИТИЯ КОМПАНИИ</a>
       <a href="#" class="blue_btn">НАШЕ ПОРТФОЛИО</a>
   </div>
</div>
</div>
<!-- /container -->

<!-- benefits -->
<div class="benefits">
   <div>
       <div class="wrap_benefits justifyfix">
           <div class="benefit benefit_first">
               <div class="title_block_inner">Наши преимущества</div> 
               <p>Технология коммуникации, несмотря на внешние воздействия, наблюдаема. Англо-американский тип политической культуры нейтрализует субъект политического процесса. В связи с этим нужно подчеркнуть, что субъект политического процесса означает желтозём.</p>
           </div>
           <div class="benefit">
               <div class="benefit_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/categories/computer-screen_b.svg" alt="" /></div> 
               <h3>Высокая производительность</h3>
               <p>При прочих равных условиях сцепление непрерывно. Гидродинамическая дисперсия, в случае использования адаптивно-ландшафтных систем земледелия</p>
           </div>
           <div class="benefit">
               <div class="benefit_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/categories/computer-screen_b.svg" alt="" /></div> 
               <h3>Качественные материалы</h3>
               <p>Конечно, нельзя не принять во внимание тот факт, что ёмкость катионного обмена поглощает разрез одинаково по всем направлениям</p>
           </div>
           <div class="benefit">
               <div class="benefit_icon"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/categories/computer-screen_b.svg" alt="" /></div> 
               <h3>Быстрые сроки и качество</h3>
               <p>С другой стороны, определение содержания в почве железа по Тамму показало, что лопата двумерно повышает подбел</p>
           </div>
       </div>
   </div>
</div>
<!-- /benefits -->

<!-- team -->
<div class="team">
   <div>
       <div class="title_block_inner">Наша команда</div> 
       <div class="wrap_team">
           <div class="swiper-container team_slider">
               <div class="swiper-wrapper">
                
                <?php

                $query = new WP_Query( array( 'post_type' => 'team', 'publish' => true) );
                if ($query->have_posts())
                    while ( $query->have_posts() ) { 
                        $query->the_post(); 

                        ?>
                        
                        <div class="swiper-slide">
                            <div class="team_item">
                                <div class="team_i_top">
                                    <!-- img -->
                                    <?php the_content(); ?>
                                    <div class="team_hidden">
                                        <div class="team_btn">
                                            <div class="team_link team_link_email"><span class="team_link_txt">email</span></div>
                                            <div class="team_link team_link_tel"><span class="team_link_txt">telephone</span></div>
                                        </div>
                                        <div class="team_popup">
                                            <div class="team_pop_display">
                                                <div class="team_pop_position">
                                                    <div class="team_link team_link_email"><span class="team_link_txt"><?php echo get_field('uk-mail'); ?></span></div>
                                                    <div class="team_link team_link_tel"><span class="team_link_txt"><?php echo get_field('uk-phone'); ?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="team_name"><?php echo get_field('uk-fio'); ?></div>
                                <div class="team_job"><?php echo get_field('uk-job'); ?></div>
                            </div>
                        </div>

                        <?php } wp_reset_query(); ?>


                            <!-- <div class="swiper-slide">
                            	<div class="team_item">
                                	<div class="team_i_top">
                                    	<img src="<?php //echo get_template_directory_uri(); ?>/img/team.jpg" alt="" />
                                        <div class="team_hidden">
                                        	<div class="team_btn">
                                            	<div class="team_link team_link_email"><span class="team_link_txt">email</span></div>
                                                <div class="team_link team_link_tel"><span class="team_link_txt">telephone</span></div>
                                            </div>
                                            <div class="team_popup">
                                            	<div class="team_pop_display">
                                                	<div class="team_pop_position">
                                                        <div class="team_link team_link_email"><span class="team_link_txt">email</span></div>
                                                        <div class="team_link team_link_tel"><span class="team_link_txt">telephone</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team_name">АЛЕНА КАРПЕНЧУК</div>
                                    <div class="team_job">специалист по работе с клиентами</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                            	<div class="team_item">
                                	<div class="team_i_top">
                                    	<img src="<?php //echo get_template_directory_uri(); ?>/img/team.jpg" alt="" />
                                        <div class="team_hidden">
                                        	<div class="team_btn">
                                            	<div class="team_link team_link_email"><span class="team_link_txt">email</span></div>
                                            </div>
                                            <div class="team_popup">
                                            	<div class="team_pop_display">
                                                	<div class="team_pop_position">
                                                    	<div class="team_link team_link_email"><span class="team_link_txt">email</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team_name">АРСЕН МАНУКЯН</div>
                                    <div class="team_job">генеральный директор</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                            	<div class="team_item">
                                	<div class="team_i_top">
                                    	<img src="<?php //echo get_template_directory_uri(); ?>/img/team.jpg" alt="" />
                                        <div class="team_hidden">
                                        	<div class="team_btn">
                                                <div class="team_link team_link_tel"><span class="team_link_txt">telephone</span></div>
                                            </div>
                                            <div class="team_popup">
                                            	<div class="team_pop_display">
                                                	<div class="team_pop_position">
                                                		<div class="team_link team_link_tel"><span class="team_link_txt">telephone</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team_name">АЛЕНА КАРПЕНЧУК</div>
                                    <div class="team_job">специалист по работе с клиентами</div>
                                </div>
                            </div>
                        </div> -->
                        

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next team_slider_next"></div>
                    <div class="swiper-button-prev team_slider_prev"></div>
                </div>
                <div class="slider_btm">
                    <span class="slider_mouse floating_2"></span>
                </div>
            </div>
        </div>
        <!-- /team -->
        
        <!-- clients -->
        <div class="clients">
        	<div class="title_block"><span>СРЕДИ</span>НАШИХ КЛИЕНТОВ</div> 
            <div class="block_top_txt">
            	<p>Главная наша ценность - это доверие наших клиентов.</p>
                <p>Мы ценим каждого.</p>
            </div>
            <div class="wrap_clients">
            	<div class="swiper-container clients_slider">
                   <div class="swiper-wrapper">
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/1.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/2.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/3.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/4.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/5.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/6.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/7.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/1.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/2.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/3.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/4.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/5.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/6.png" alt="" /></span></a></div>
                       <div class="swiper-slide"><a href="#" target="_blank" class="clients_logo"><span><img src="<?php echo get_template_directory_uri(); ?>/img/clients/7.png" alt="" /></span></a></div>
                   </div>
               </div>
           </div>
           <div class="slider_btm">
               <span class="slider_mouse floating_2"></span>
           </div>
       </div>
       <!-- /clients -->
       
       <?php get_footer(); ?>
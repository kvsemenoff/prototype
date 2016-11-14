 <?php 
 /*
 Template name: Портфолио
 */
 ?>
 <?php get_header(); ?>

<!-- ************************************************************* -->
<?php 

    $args = array('orderby' => 'id', 'hide_empty' => 0);
    $categories = get_categories( $args );

    print_r($categories);
    
    $my_array = array();
    for ($j=0; $j<count($categories); $j++){
        $my_id = $categories[$j]->term_id;
        $categories2 =  get_categories(Array('parent' => $my_id));
        $my_array[$my_id] = $categories2;
    }
        print_r($my_array); //выводит массив, который надо перебрать

 ?>
<!-- ************************************************************* -->

<div class="container">
	<div>
    	<div class="breadcrumbs">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
        </div>
        <div class="portfolio_page">
        	<h1>Портфолио</h1>
            <div class="portfolio_filters">
            	<div class="filters_line">
                	<p>Категория:</p>
                    <a href="#" class="grey_btn active_gr_btn">Все</a>     
                    <a href="#" class="grey_btn">УФ печать</a>
                    <a href="#" class="grey_btn">Печать на текстиле</a>
                    <a href="#" class="grey_btn">Цифровая печать</a>
                    <a href="#" class="grey_btn">Широформатная печать</a>
                </div>
                <div class="filters_line">
                	<p>Год выпуска:</p>
                    <a href="#" class="grey_btn active_gr_btn">Все</a>
                    <a href="#" class="grey_btn">2016</a>                     
                    <a href="#" class="grey_btn">2015</a>
                    <a href="#" class="grey_btn">2014</a>
                    <a href="#" class="grey_btn">2013</a>
                </div>
            </div>
            <div class="filtered_items clearfix">
            	<div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на ЧЕХЛЕ МОБИЛЬНОГО ТЕЛЕФОНА</div>
                        <span class="fresh_client">Частный клиент</span>
                    </div>
                </div>
                <div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на фризби</div>
                        <span class="fresh_client">Ростелеком</span>
                    </div>
                </div>
                <div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на ЧЕХЛЕ МОБИЛЬНОГО ТЕЛЕФОНА</div>
                        <span class="fresh_client">Частный клиент</span>
                    </div>
                </div>
                <div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на фризби</div>
                        <span class="fresh_client">Ростелеком</span>
                    </div>
                </div>
                <div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на ЧЕХЛЕ МОБИЛЬНОГО ТЕЛЕФОНА</div>
                        <span class="fresh_client">Частный клиент</span>
                    </div>
                </div>
                <div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на фризби</div>
                        <span class="fresh_client">Ростелеком</span>
                    </div>
                </div>
                <div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на ЧЕХЛЕ МОБИЛЬНОГО ТЕЛЕФОНА</div>
                        <span class="fresh_client">Частный клиент</span>
                    </div>
                </div>
                <div class="fresh_item">
                    <a href="#" class="fresh_item_img"><img src="<?php echo get_template_directory_uri(); ?>/img/fresh.jpg" alt="" /></a>
                    <div class="fresh_item_text">
                        <div class="item_title">УФ печать на фризби</div>
                        <span class="fresh_client">Ростелеком</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php 
/*
Template name: Услуги
*/
?>
<?php get_header(); ?>     

<?php
function d($val, $caption="", $die=0){
    echo "<br><span style='color: red; '>DEBUG {$caption} </span><pre>"; 
    print_r($val); 
    echo "</pre>"; 

    if ($die) { die(); }
}
?>

<!-- container -->
<div class="container">
    <div>
        <div class="breadcrumbs">
            <a href="#">Главная</a>\
            <span>Услуги</span>
        </div>
        <div class="about">
            <h1>Услуги типографии</h1>
            <p>На этой странице перечислен полный ассортимент продукции, печать или изготовление которой можно заказать в типографии «ПРОТОТИП».</p>
        </div>
        <!-- start of Nav_services -->
        <?php 
            global $wpdb; 
            $query = "SELECT COUNT(*) FROM posts";
            //$wpdb->query($query);
            $rs = $wpdb->get_results($query);
            d($rs, "query 1", 1); 

            $query = new WP_Query( array( 'post_type' => 'de_services', 'publish' => true) ); 
            $query = $query['posts']; 
            d($query,"de_services",1); 

            $hiterms = get_terms("mycat", array("orderby" => "slug", "parent" => 0));
            //d($hiterms,"parent"); 
            foreach($hiterms as $key => $hiterm){
                d($hiterm,"hiterm_inner"); 
                //$image = get_image('картинка_для_категории_услуги', $hiterm); 
                //$arr = get_field('картинка_для_категории_услуги');  print_r($arr); 
                $queried_object = get_queried_object(); 
                d($queried_object,"inner object. id = "); 
                $taxonomy = $queried_object->taxonomy; 
                $term_id = $queried_object->term_id; 
                $image = get_field('mycatimg', $taxonomy . '_' . $term_id); 
                d($image,"img"); 
                // $image = get_field('name'); 
                echo 'img = <img src="'.$image['sizes']['thumbnail'].'" /> :_ end<br/>'; 
                echo $hiterm->name; 
                echo $hiterm->slug;                 

                // 
                // $query = new WP_Query( array( 'post_type' => 'de_services', 'publish' => true) ); 
                // d($query,"de_services",1); 
                //  if ($query->have_posts())
                //     while ( $query->have_posts() ) { 
                //       $query->the_post(); 


                //       echo get_the_content(); 
                //       echo get_field('uk-fio');
                //   }
                wp_reset_query();

                $loterms = get_terms("mycat", array("orderby" => "slug", "parent" => $hiterm->term_id)); 
                if($loterms){
                    foreach($loterms as $key => $loterm){
                    }
                }
            }
            ?>

        <!-- end of Nav_services -->
        <hr>
        <hr>
        <hr>

        <div class="service_page">
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser1.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Дизайн</a>
                    <div class="ser_menu">
                        <ul>
                            <li><a href="#">Брелоки</a></li>
                            <li><a href="#">Ежедневники</a></li>
                            <li><a href="#">Флешки</a></li>
                            <li><a href="#">Ручки</a></li>
                            <li><a href="#">Зарядные устройства</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser2.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Печатная продукция премиум класса</a>
                    <div class="ser_menu">
                        <ul>
                            <li><a href="#">Брошюры на скобе</a></li>
                            <li><a href="#">Брошюры на клею</a></li>
                            <li><a href="#">Брошюры на пружине</a></li>
                            <li><a href="#">Брошюры на болтах</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser3.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Визитные карточки</a>
                    <div class="ser_menu">
                        <ul>
                            <li><a href="#">Стандартные визитки</a></li>
                            <li><a href="#">Дизайнерские визитки</a></li>
                            <li><a href="#">Многослойные визитки</a></li>
                            <li><a href="#">Эксклюзивные визитки</a></li>
                            <li><a href="#">Эко-визитки</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser4.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Буклеты и Плакаты</a>
                    <div class="ser_menu">
                        <ul>
                            <li><a href="#">Стандартные каталоги</a></li>
                            <li><a href="#">Эксклюзивные каталоги</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser5.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Предложение для кафе и ресторанов</a>
                    <div class="ser_menu">
                        <ul>
                            <li><a href="#">Дешевые листовки</a></li>
                            <li><a href="#">Презентабельные листовки</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser6.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Брендированная упаковка</a>
                    <div class="ser_menu">
                        <ul>
                            <li><a href="#">Стандартные открытки</a></li>
                            <li><a href="#">Дизайнерские открытки</a></li>
                            <li><a href="#">Нестандартные открытки</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser1.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Наклейки</a>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser1.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Наклейки</a>
                </div>
            </div>
            <div class="service_page_link">
                <a href="#" class="ser_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/services/ser1.jpg" alt="" />
                </a>
                <div class="ser_txt">
                    <a href="#" class="ser_title">Наклейки</a>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- /container -->
<?php get_footer(); ?>
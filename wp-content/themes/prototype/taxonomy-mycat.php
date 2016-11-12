<?php get_header(); ?>  
tttttttttttttttttttttt
<?php
$term = get_queried_object();
$children = get_terms( $term->taxonomy, array(
'parent'    => $term->term_id,
'hide_empty' => false
) );

if( $children ){
   echo "ddd";

} else { 
        // здесь код следующего уровня
    lavel2();
   
}
?>




<?php get_footer(); ?>

<?php

function lavel2(){
    ?>
           
    <div class="container">
        <div>
            <div class="breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
                </div>
            <div class="service_i_top clearfix">
                <h1><?php the_title(); ?></h1>
                <div class="service_i_txt">
                    <p>Выберите визитку, которую вы хотели бы заказать из предложенных ниже. Если не нашли подходящую – позвоните нам или отправьте сообщение через форму, расположенную внизу страницы.</p>
                </div>
            </div>
            <div class="service_inside clearfix">
                <?php 
                $term = get_queried_object();
                 wp_reset_query();
                 $args = array(
                    'post_type' => 'de_services',
                    'mycat'    => $term->name
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
               
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        ?>
                        <div class="ser_i_link">            
                            <a href="<?php the_permalink(); ?>" class="ser_l_img"><img src="<?php echo get_template_directory_uri(); ?>/img/services/ser1.jpg" alt="" /></a>
                            <div class="ser_i_txt">
                                <a href="<?php the_permalink(); ?>" class="ser_i_title"><?php the_title(); ?></a>
                                <ul>    
                                    <li>Обычные визитки на качественной плотной бумаге</li>
                                    <li>Самый недорогой вариант из всех возможных</li>
                                    <li>Оптимально подходят для массового распространения</li>
                                </ul>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="bordered_btn">ПОДРОБНЕЕ</a>
                        </div>
                <?php        
                    }
                } else {
                    // Постов не найдено
                }
                /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
                wp_reset_query();
                ?>
                
            </div>
            <div class="service_inside_btm">
                <h2>Вот некоторые визитки, которые мы печатаем:</h2>
                <ul>
                    <li>стандартные визитки – для них применяется белая плотная бумага. Подходят для тех, кто стеснен в бюджете или нуждается в визитках без изысков для массового распространения</li>
                    <li>многослойные визитки – двух- или трехслойные с цветной вставкой внутри. внимание.</li>
                    <li>дизайнерские визитки – печатаются на дизайнерских бумагах и картонах, в том числе белой краской. Отделка - на вкус заказчика: слепое тиснение, тиснение фольгой, вырубка и проч.</li>
                    <li>эксклюзивные визитки - космос! Описать словами трудно. Приезжайте в гости, и мы покажем образцы.</li>
                    <li>Эко-визитки - делаются только из переработанной бумаги. Не популярный сегодня вариант, но интерес к ним растет.</li>
                </ul>
                <p>Отдельно отметим, что в типографии ПРОТОТИП заказывают визитки по индивидуальному проекту. Вы рассказываете, что хотите, а мы придумываем, как это сделать!</p>
            </div>
        </div>
    </div>
    <?php

}

?>


<?php 
/*
Template name: Услуги
*/
?>
<?php get_header(); ?>  

<div class="container">
    <div>
         <div class="breadcrumbs">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
        </div>
        <div class="about">
            <h1>Услуги типографии</h1>
            <p>На этой странице перечислен полный ассортимент продукции, печать или изготовление которой можно заказать в типографии «ПРОТОТИП».</p>
        </div>
        <div class="service_page">
        <?php 
            $hiterms = get_terms("mycat", array("orderby" => "slug", "parent" => 0));
            foreach($hiterms as $key => $hiterm){
                $image = get_field('mycatimg', 'mycat' . '_' . $hiterm->term_id); 
                ?>
                <div class="service_page_link">
                    <a href="#" class="ser_img">
                        <img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="">
                    </a>
                    <div class="ser_txt">
                        <a href="<?php  echo $hiterm->slug;  ?>" class="ser_title"><?php echo $hiterm->name; ?></a>
                        <div class="ser_menu">
                            <?php 
                             wp_reset_query();
                             $args = array(
                                'post_type' => 'de_services',
                                'mycat'    => $hiterm->name
                            );
                            $query = new WP_Query( $args );
                            if ( $query->have_posts() ) {
                           
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?><li><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></li><?php
                                   
                                }
                            } else {
                                // Постов не найдено
                            }
                            /* Возвращаем оригинальные данные поста. Сбрасываем $post. */
                            wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- end of Nav_services -->
    </div>
</div>

<?php get_footer(); ?>
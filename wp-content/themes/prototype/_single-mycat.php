<?php get_header(); ?>  
eeeeeeeeeeeeeeeeeee
<?php
$term = get_queried_object();
$children = get_terms( $term->taxonomy, array(
'parent'    => $term->term_id,
'hide_empty' => false
) );

if( $children ){
    lavel1();

} else { 
        // здесь код следующего уровня
echo 'lavel3';
    while ( have_posts() ) : the_post();

    endwhile;
}
?>




<?php get_footer(); ?>


<?php 
function lavel1(){
?>

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
        <div class="service_page">
eeeeee33333333
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
                            <ul>
                            <?php 
                            $loterms = get_terms("mycat", array("orderby" => "slug", "parent" => $hiterm->term_id)); 
                            //print_r($loterms);
                            if($loterms){
                                foreach($loterms as $key => $loterm){
                                    ?><li><a href="echo $loterm->slug;"><?php echo $loterm->name; ?></a></li><?php
                                }
                            }
                            ?>
                            </ul>
                            <!-- <ul>
                                <li><a href="#">Брошюры на скобе</a></li>
                                <li><a href="#">Брошюры на клею</a></li>
                                <li><a href="#">Брошюры на пружине</a></li>
                                <li><a href="#">Брошюры на болтах</a></li>
                            </ul> -->
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
<?php
}
?>


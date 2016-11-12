<?php get_header(); ?>
<div class="service_page_link">
  	<?php $hiterms = get_terms("mycat", array("orderby" => "slug", "parent" => 0)); ?>
    <?php foreach($hiterms as $key => $hiterm) : ?>
    		<?php 

    			//$image = get_image('картинка_для_категории_услуги', $hiterm);
    			//$arr = get_field('картинка_для_категории_услуги');  print_r($arr); 

  			// vars



    		?>
	    	<a href="#" class="ser_img">
	      	<?php 

					$queried_object = get_queried_object(); 

					$taxonomy = $queried_object->taxonomy;
					$term_id = $queried_object->term_id;  
					  			$image = get_field('mycatimg', $taxonomy . '_' . $term_id);
					echo '<img src="'.$image['sizes']['thumbnail'].'" />';

	      	?>
	      

	      </a>
	      <div class="ser_txt">
	          <a href="<?php echo $hiterm->slug; ?>" class="ser_title"><?php echo $hiterm->name; ?></a>
	          <div class="ser_menu">
	          	<ul>
 						
		            <?php $loterms = get_terms("mycat", array("orderby" => "slug", "parent" => $hiterm->term_id)); ?>
		            <?php if($loterms) : ?>
                
                    <?php foreach($loterms as $key => $loterm) : ?>
                        <li><a href="<?php echo $loterm->slug; ?>"><?php echo $loterm->name; ?></a></li>
                    <?php endforeach; ?>
               
           		 	<?php endif; ?>
	              	
	              </ul>
	          </div>
	      </div>

       
    <?php endforeach; ?>
 </div>

 <?php get_footer(); ?>




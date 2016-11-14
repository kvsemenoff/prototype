<?php get_header(); // siiiiiiiiiiiigle ?>
siiiiiiiiiiiigle
<div class="container">
	<div>
		<div class="wrap_container clearfix">

			<!-- container -->
			<div class="container">
				<div>
					<div class="breadcrumbs">
						<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' \ '); ?>
					</div>
					<div class="service_i_top clearfix">
						<h1><?php echo get_the_title();  ?></h1>
						<div class="service_i_txt">							
							<p><?php echo get_field("serv_item_short_caption"); ?></p>
						</div>
					</div>
				</div>
			</div>
			<!-- /container -->

			
			<div class="service_main">
				<div>
					<div class="wrap_service clearfix">
						<div class="service_left">
							<h2>Особенности:</h2>
							<ul>
								<?php echo get_field("serv_item_osoben"); ?>
							</ul>
							<a href="#scroll_block" class="blue_btn scroll2">ЗАКАЗАТЬ</a>
						</div>
						<div class="service_right">							
							<?php 
                //$hiterms = get_terms("mycat", array("orderby" => "slug", "parent" => 0));
                //foreach($hiterms as $key => $hiterm){ 
								$image = get_field('img1'); 
								$image = $image['sizes']['thumbnail']; 
                // src = $image['sizes']['thumbnail'] 
							?><img src="<?php echo $image; ?>" alt="" />
						</div>
					</div>
				</div>
			</div>

			<div class="service_info">
				<div>
					<div class="wrap_service_info">
						<div class="service_tabs">
							<span class="tab current">Описание</span>                  
							<span class="tab">Спецификация</span>
							<span class="tab">Стоимость услуги</span>
						</div>
						<div class="wrap_tabs_content">
							<div class="tabs_content t_c_visible">								
								<?php echo get_field("serv_item_tab_desc"); ?>
							</div>
							<div class="tabs_content">							
								<?php echo get_field("serv_item_tab_spec"); ?>
							</div>
							<div class="tabs_content">								
								<?php echo get_field("serv_item_tab_cost"); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- /container -->
<?php get_footer(); ?>
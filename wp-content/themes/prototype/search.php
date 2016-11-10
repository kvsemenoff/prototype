<?php get_header(); ?>

 <!-- wrap_nav -->
        <div class="wrap_nav dark_blue_bg">
        	<div>
            	<div class="nav">
                	<ul>                                                
                    	<li><a href="#">О компании</a></li>
                        <li class="nav_has_children"><a href="#">Услуги</a>
                        	<ul>
                                <li><a href="#">Услуги</a></li>
                                <li><a href="#">Услуги</a></li>
                                <li><a href="#">Услуги</a></li>
                            </ul>
                        </li>
                        <li class="nav_has_children"><a href="#">Производство</a>
                        	<ul>
                                <li><a href="#">Производство</a></li>
                                <li><a href="#">Производство</a></li>
                                <li><a href="#">Производство</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Портфолио</a></li>
                        <li><a href="#">F.A.Q.</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /wrap_nav -->
        
        <!-- container -->
        <div class="container">
        	<div>
            	<div class="search_page">
                	<h1>Поиск по сайту</h1>
                	<div class="search search_inner">
                        <form>
                            <input type="text" class="search_inp" name="s" placeholder="поиск по сайту" />
                            <input type="submit" class="search_btn" />
                        </form>
                    </div>
                    <?php if ( have_posts() ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
						</header><!-- .page-header -->
						<div class="search_field search_field_inner">Вы искали: <a href="#"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></a></div>
                    	<div class="calc_results">Найдено: <span class="res_number">20 записей</span></div>      
                    	<div class="search_results">
                    	<ol>
						<?php while ( have_posts() ) : the_post(); ?>
						<li>
                        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php echo get_the_content(); ?></p>
                        </li>
						<?php endwhile; ?>
						</ol>
						
						<?php else : ?>
							<div class="search_field search_field_inner">Вы искали: <a href="#"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></a></div>
                    		<div class="calc_results">Ничего не найдено. Попробуйте уточнить свой запрос.</div> 

							
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->


<?php get_footer(); ?>
<?


if (function_exists('register_sidebar'))
	register_sidebar(array('name' => 'Sidebar'));

register_nav_menus(array(
	'top' => 'Верхнее меню',            
	'bottom' => 'Нижнее меню'   
));

add_theme_support('menus');

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 220, 147);
}

function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_action('init', 'remove_else_link');

add_image_size('squareThumb', 292, 278, true);

function remove_else_link()
{

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 ); 

remove_action('wp_head','feed_links_extra', 3); // ссылки на дополнительные rss категорий
remove_action('wp_head','feed_links', 2); //ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // для сервиса Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // для Windows Live Writer
remove_action('wp_head','wp_generator');  // убирает версию wordpress
 
// убираем разные ссылки при отображении поста - следующая, предыдущая запись, оригинальный url и т.п.
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','rel_canonical');
remove_action( 'wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head','wp_shortlink_wp_head', 10, 0 );
}

function repl_mon( $str ){
//	echo 'sss'.$str;
	$healthy = array('Янв',  'Фев', 'Мар', 'Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек');
	$healthy2 = array('01',  '02', '03', '04','05','06','07','08','09','10','11','12');
	$yummy   = array('января', 'февраля', 'марта','апреля', 'мая', 'июня','июля','августа.','сентября','октября','ноября','декабря.');

	//$rt = str_replace($healthy, $yummy, $str);
	$rt = str_replace($healthy2, $yummy, $str);
	//echo "rt=".$rt;
	return $rt;
}


add_action('init', 'faq_register');
function faq_register() {
    $args = array(
        'label'               => __('Вопрос-ответ'),
        'labels'              => array(
            'name'               => __('Вопрос-ответ'),
            'singular_name'      => __('Вопрос-ответ'),
            'menu_name'          => __('Вопрос-ответ'),
            'all_items'          => __('Все вопрос-ответы'),
            'add_new'            => _x('Добавить вопрос-ответ', 'talk'),
            'add_new_item'       => __('Новая запись вопрос-ответ'),
            'edit_item'          => __('Редактировать вопрос-ответ'),
            'new_item'           => __('Новая запись вопрос-ответ'),
            'view_item'          => __('Вопрос-ответ'),
            'not_found'          => __('Вопрос-ответ не найден'),
            'not_found_in_trash' => __('Удаленных вопрос-ответов нет'),
            'search_items'       => __('Найти вопрос-ответ')
        ),
        'description'         => __('Вопрос-ответ'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('faq', $args);
}

add_action('init', 'slider_register');
function slider_register() {
    $args = array(
        'label'               => __('Услуги'),
        'labels'              => array(
            'name'               => __('Услуги'),
            'singular_name'      => __('Услуги'),
            'menu_name'          => __('Услуги'),
            'all_items'          => __('Все услуги'),
            'add_new'            => _x('Добавить услугу', 'product'),
            'add_new_item'       => __('Новая услуга'),
            'edit_item'          => __('Редактировать услугу'),
            'new_item'           => __('Новая услуга'),
            'view_item'          => __('Услуги'),
            'not_found'          => __('Услуга не найдена'),
            'not_found_in_trash' => __('Удаленных услуг нет'),
            'search_items'       => __('Найти услугу')
        ),
        'description'         => __('Услуги'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title'
            
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('service', $args);
}





/**
 * Хлебные крошки для WordPress (breadcrumbs)
 * 
 * @param  string [$sep = '']       Разделитель. По умолчанию ' » '
 * @param  array  [$l10n = array()] Для локализации. См. переменную $default_l10n.
 * @param  array  [$args = array()] Дополнительные аргументы.
 * @return string HTML код
 *                
 * version 1.9      
 */
function kama_breadcrumbs( $sep = '', $l10n = array(), $args = array() ){
    global $post, $wp_query, $wp_post_types;

    // Локализация
    $def_l10n = array(
        'home'       => 'Главная',
        'paged'      => 'Страница %d',
        '_404'       => 'Ошибка 404',
        'search'     => 'Результаты поиска по запросу - <b>%s</b>',
        'author'     => 'Архив автора: <b>%s</b>',
        'year'       => 'Архив за <b>%d</b> год',
        'month'      => 'Архив за: <b>%s</b>',
        'day'        => '',
        'attachment' => 'Медиа: %s',
        'tag'        => 'Записи по метке: <b>%s</b>',
        'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
        // tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'. 
        // Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
    );

    // Параметры по умолчанию
    $def_args = array(
        'on_front_page'   => true,  // выводить крошки на главной странице
        'show_post_title' => '<li>%s</li>',  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
        // можно указать строку вида <span>%s</span>, когда нужно обернуть заголовок в html
        'sep'             => '', // разделитель
        'markup'          => 'schema.org', 
        // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки 
        // или можно указать свой массив разметки:
        // array( 'wrap'=>'<div class="kama_breadcrumbs">',   'wrap_close'=>'</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
        'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
        'priority_terms'  => array(),
        // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
        // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
        // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
        // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
        'nofollow' => false, // добавлять rel=nofollow к ссылкам?
    );

    // Фильтрует аргументы по умолчанию
    $loc  = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', $def_l10n ), $l10n );
    $args = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', $def_args ), $args );

    if( ! $sep ) $sep = $args->sep;

    // микроразметка ---
    if(1){
        $mrk = & $args->markup;

        // Разметка по умолчанию default
        if( ! $mrk ){
            $mrk = array(
                'wrap'       => '<div class="breadcrump"><ul>',
                'wrap_close' => '</ul></div>',
                'linkpatt'   => '<li><a href="%s">%s</a></li>',
                'sep_after'  => '',
            );
        }
        if( $mrk == 'rdf.data-vocabulary.org' ){
            $mrk = array(
                'wrap'       => '<div class="breadcrump"><ul>',
                'wrap_close' => '</ul></div>',
                'linkpatt'   => '<li><a href="%s">%s</a></li>',
                'sep_after'  => '', // закрываем span после разделителя!
            );
        }
        // schema.org
        elseif( $mrk == 'schema.org' ){
            $mrk = array(
                'wrap'       => '<div class="breadcrump"><ul>',
                'wrap_close' => '</ul></div>',
                'linkpatt'   => '<li><a href="%s">%s</a></li>',
                'sep_after'  => '', // закрываем span после разделителя!
            );
        }
        elseif( ! is_array($mrk) )
            die( __FUNCTION__ .': "markup" parameter must be array...');

        $wrap       = $mrk['wrap']."\n";
        $wrap_close = $mrk['wrap_close']."\n";
        $linkpatt   = $args->nofollow ? str_replace('<a ','<a rel="nofollow"', $mrk['linkpatt']) : $mrk['linkpatt'];
        $sep       .= $mrk['sep_after']."\n";
    }

    // Видимо это архив пустой таксы
    if( empty($post) )
        $ptype = & $wp_post_types[ get_taxonomy( get_queried_object()->taxonomy )->object_type[0] ];
    else
        $ptype = & $wp_post_types[ $post->post_type ];

    // paged
    $pg_end = '';
    if( $paged_num = $wp_query->query_vars['paged'] ){
        $pg_end  = /*'</a>'.*/ $sep . sprintf( $loc->paged, (int) $paged_num );
    }

    // OUT
    $out = '';

    // front page
    if( is_front_page() ){
        return $args->on_front_page ? ( print $wrap .( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ). $wrap_close ) : '';
    }
    elseif( is_404() ){
        $out = $loc->_404; 
    }
    elseif( is_search() ){
        $out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
    }
    elseif( is_author() ){
        $q_obj = &$wp_query->queried_object;
        $tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
        $out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
    }
    elseif( is_year() || is_month() || is_day() ){
        $y_url  = get_year_link( $year = get_the_time('Y') );

        if( is_year() ){
            $tit = sprintf( $loc->year, $year );
            $out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
        }
        // month day
        else {
            $y_link = sprintf( $linkpatt, $y_url, $year);
            $m_url  = get_month_link( $year, get_the_time('m') );

            if( is_month() ){
                $tit = sprintf( $loc->month, get_the_time('F') );
                $out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
            }
            elseif( is_day() ){
                $m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
                $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
            }
        }
    }
    // Древовидные записи
    elseif( is_singular() && $ptype->hierarchical ){
        $out = __hierarchical_posts( $args, $sep, $linkpatt, $post );
    }
    // Таксы, вложения и не древовидные записи
    else {
        $term = false;
        // set term (attachments too)
        if( is_singular() ){
            // Чтобы определить термин для вложения
            if( is_attachment() && $post->post_parent ){
                $save_post = $post;
                $post = get_post( $post->post_parent );

                if( is_post_type_hierarchical( $post->post_type ) ){
                    $hierarchical_post_attach_out = __hierarchical_posts( $args, $sep, $linkpatt, $post );
                }
            }

            // учитывает если вложения прикрепляются к таксам древовидным - все бывает :)

            $taxonomies = get_object_taxonomies( $post->post_type );
            // оставим только древовидные и публичные, мало ли...
            $taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );

            if( $taxonomies ){
                // сортируем по приоритетности
                if( ! empty($args->priority_tax) ){
                    usort( $taxonomies, function($a,$b)use($args){
                        $a_index = array_search($a, $args->priority_tax);
                        if( $a_index === false ) $a_index = 9999999;

                        $b_index = array_search($b, $args->priority_tax);
                        if( $b_index === false ) $b_index = 9999999;

                        return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
                    } );
                }

                // пробуем получить термины, в порядке приоритетности такс
                foreach( $taxonomies as $taxname ){
                    if( $terms = get_the_terms( $post->ID, $taxname ) ){
                        // проверим приоритетные термины для таксы
                        $prior_terms = & $args->priority_terms[ $taxname ];
                        if( $prior_terms && count($terms) > 2 ){                 
                            foreach( (array) $prior_terms as $term_id ){
                                $filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
                                $_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

                                if( $_terms ){
                                    $term = array_shift( $_terms );
                                    break;
                                }
                            }
                        }
                        else
                            $term = array_shift( $terms );                  

                        break;
                    }
                }
            }

            if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
        }
        // term for tax page
        else
            $term = get_queried_object();

        //if( ! $term && ! is_attachment() ) return print "Error: Taxonomy is not defined!"; 
        //var_dump($term);
        // вложение древовидного типа записи
        if( isset($hierarchical_post_attach_out) ){
            $out = $hierarchical_post_attach_out . sprintf( $linkpatt, get_permalink( $post->post_parent ), get_the_title( $post->post_parent ) ) . $sep . __show_post_title( $args->show_post_title, $post->post_title );
        }
        // если есть термин
        elseif( $term && isset($term->term_id) ){
            $term = apply_filters('kama_breadcrumbs_term', $term );

            $term_tit_patt = '';
            if( $term->term_id )
                $term_tit_patt = $paged_num ? sprintf( $linkpatt, get_term_link($term->term_id, $term->taxonomy), '{title}' ) . $pg_end : '{title}';

            // attachment
            if( is_attachment() ){
                if( ! $post->post_parent )
                    $out = sprintf( $loc->attachment, esc_html($post->post_title) );
                else{
                    $tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) ) . $sep . __show_post_title( $args->show_post_title, $post->post_title );
                    $out = __crumbs_tax( $term->term_id, $term->taxonomy, $sep, $linkpatt ) . $tit;
                }
            }
            // single
            elseif( is_single() ){
                $out = __crumbs_tax( $term->parent, $term->taxonomy, $sep, $linkpatt ) . sprintf( $linkpatt, get_term_link( $term->term_id, $term->taxonomy ), $term->name ). $sep . __show_post_title( $args->show_post_title, $post->post_title );
                // Метки, архивная страница типа записи, произвольные одноуровневые таксономии
            }
            // taxonomy не древовидная
            elseif( ! is_taxonomy_hierarchical( $term->taxonomy ) ){
                // метка
                if( is_tag() )
                    $out = str_replace('{title}', sprintf( $loc->tag, $term->name ), $term_tit_patt );
                // таксономия
                elseif( is_tax() ){
                    $post_label = $ptype->labels->name;
                    $tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
                    $out = str_replace('{title}', sprintf( $loc->tax_tag, $post_label, $tax_label, $term->name ), $term_tit_patt );
                }
            }
            // Рубрики и таксономии
            else{
                //die( $term->taxonomy );
                $out = __crumbs_tax( $term->parent, $term->taxonomy, $sep, $linkpatt ) . '<li>'.str_replace('{title}', $term->name, $term_tit_patt ).'</li>';
            }
        }
    }

    $home_after = '';

    // замена ссылки на архивную страницу для типа записи 
    $home_after = apply_filters('kama_breadcrumbs_home_after', false, $linkpatt, $sep );

    // Ссылка на архивную страницу произвольно типа поста. Ссылку можно заменить с помощью хука 'kama_breadcrumbs_home_after'
    if( ! $home_after && $ptype->has_archive && (is_post_type_archive() || is_singular()) && ! in_array( $post->post_type, array('post','page','attachment') ) ){
        $pt_name = $ptype->labels->name;

        if( is_post_type_archive() && ! $paged_num )
            $home_after = $pt_name;
        else
            $home_after = sprintf( $linkpatt, get_post_type_archive_link( $post->post_type ), $pt_name ) . ($pg_end ? $pg_end : $sep);
    }

    $home = sprintf( $linkpatt, home_url(), $loc->home ). $sep . $home_after;

    $out = apply_filters('kama_breadcrumbs_pre_out', $out );

    $out = $wrap. $home . $out .$wrap_close;

    return print apply_filters('kama_breadcrumbs', $out, $sep );
}
function __hierarchical_posts( $args, $sep, $linkpatt, $post ){
    $parent = $post->post_parent;

    $crumbs = array();
    while( $parent ){
        $page = get_post( $parent );
        $crumbs[] = sprintf( $linkpatt, get_permalink( $page->ID ), $page->post_title );
        $parent = $page->post_parent;
    }
    $crumbs = array_reverse( $crumbs );

    $out = '';
    foreach( $crumbs as $crumb )
        $out .= $crumb . $sep;

    return $out . __show_post_title( $args->show_post_title, $post->post_title );
}
function __show_post_title( $is_show, $title ){
    return $is_show ? ( is_string($is_show) ? sprintf( $is_show, esc_html($title) ) : esc_html($title) ) : '';
}
function __crumbs_tax( $term_id, $tax, $sep, $linkpatt ){
    $termlink = array();
    while( $term_id ){
        $term2      = get_term( $term_id, $tax );
        $termlink[] = sprintf( $linkpatt, get_term_link( $term2->term_id, $term2->taxonomy ), esc_html($term2->name) ). $sep;
        $term_id    = $term2->parent;
    }

    $termlinks = array_reverse( $termlink );

    return implode('', $termlinks );
}
add_action('init', 'manufacture_register');
function manufacture_register() {
    $args = array(
        'label'               => __('Производство'),
        'labels'              => array(
            'name'               => __('Производство'),
            'singular_name'      => __('Производство'),
            'menu_name'          => __('Производство'),
            'all_items'          => __('Все записи производства'),
            'add_new'            => _x('Добавить запись производства', 'manufacture'),
            'add_new_item'       => __('Новая запись производства'),
            'edit_item'          => __('Редактировать запись производства'),
            'new_item'           => __('Новая запись производства'),
            'view_item'          => __('Производство'),
            'not_found'          => __('Запись производства не найдена'),
            'not_found_in_trash' => __('Удаленных записей производства нет'),
            'search_items'       => __('Найти запись производства')
        ),
        'description'         => __('Производство'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   'excerpt',
   'custom-fields',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => 'manufacture',
            'with_front' => false
        )
    );
    register_post_type('manufacture', $args);
}
/**
 * Изменения версий:
 * 
 * 1.9
 * ADD: фильтр 'kama_breadcrumbs_default_loc' для изменения локализации по умолчанию
 * 
 * 1.8
 * FIX: заметки, когда в рубрике нет записей
 * 
 * 1.7
 * Улучшена работа с приоритетными таксономиями.
 */

?>
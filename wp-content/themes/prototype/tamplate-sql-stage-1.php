<?php

 /*
 Template name: SQL - stage - 1
 */

get_header(); 

//
echo "SQL --- start" . "<hr>"; 

function d($val, $text="", $die=0){
	echo "DEBUG: <p style='color: red; '>{$text} </p><pre>";
	print_r($val); 
	echo "</pre>"; 
	if ($die) die(); 
}

// de_services 
global $wpdb; 
$query = "SELECT * FROM wp_posts 
					Where wp_posts.post_type = 'services' 
					;"; 
//$rs = $wpdb->query($query); 
$rs = $wpdb->get_results($query); 
//d(null, "START: wp_posts.post_type = 'de_services'"); 
//d(count($rs), "RS num_rows: ", 0); 
//d($rs, "RS of --- wp_posts.post_type = 'de_services", 0);  
$de_serv = []; 
foreach($rs as $k => $v){
	$item = []; 
	//d($v,'',1);
	// ID, post_title, post_status, 
	//echo "<span style='color: green; '>ID: </span>"; 
	//echo $v->ID . "<br/>"; 
	$item['id'] = $v->ID; 

	//echo "<span style='color: green; '>post_title: </span>"; 
	//echo $v->post_title . "<br/>"; 
	$item['post_title'] = $v->post_title; 

	//echo "<span style='color: green; '>post_status: </span>"; 
	//echo $v->post_status . "<br/>"; 
	$item['post_status'] = $v->post_status; 

	//echo "<hr/>"; 
	$de_serv[] = $item; 
}
//d($de_serv, "de_serv --- New RS"); 

// 
$query = "
	SELECT *
	FROM wp_terms wt
	INNER JOIN wp_term_taxonomy wtt ON wt.term_id = wtt.term_id
	WHERE wtt.taxonomy = 'mycat' AND wtt.count > 0"; 

//$rs = $wpdb->query($query); 
$rs2 = $wpdb->get_results($query); 
d($rs2, "mycat inner"); 

// 
echo "<hr>" . "SQL --- end" . "<hr>"; 
get_footer(); 

<?php

add_filter('posts_orderby', 'psr_custom_order');

function psr_custom_order($orderby){
	$psr_options = get_option('psr_options');

	foreach($psr_options as $condition => $sort_type){
		$condition = html_entity_decode($condition);
		$sort_type = html_entity_decode($sort_type);
		
		$condition = eval('return '.$condition.';');

		if($condition){
			$orderby = $sort_type;
			break;
		}
	}
	
	if(isset($_GET['sort'])){
		$psr_widget = get_option('psr_widget');
		$orderby = stripslashes($psr_widget[$_GET['sort']]);
	}
	
	$GLOBALS['psr_orderby'] = $orderby;
	return $orderby;
}

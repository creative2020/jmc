<?php

add_action('init', 'psr_initialize');

function psr_initialize(){
	$psr_options = array();
	add_option('psr_options', $psr_options);
	
	$psr_widget = array();
	add_option('psr_widget', $psr_widget);
}

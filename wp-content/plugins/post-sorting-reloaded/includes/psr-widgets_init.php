<?php

class psr_widget extends WP_Widget {
	/** constructor */
	function psr_widget() {

		/* Widget settings. */
		$widget_ops = array('description' => 'Widget that allows your users to choose a sort type.');

		/* Widget control settings. */
		$control_ops = array('width' => 600);

		parent::WP_Widget(false, $name = 'Post Sorting Reloaded', $widget_ops, $control_ops);	
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);
		
		$psr_widget = get_option('psr_widget');
	
		echo $before_widget;
		if ( $title )
			echo $before_title . $title . $after_title;

		echo $instance['before_all'];
		foreach($instance['psr_widget_options'] as $link_name => $sort_type){
		
			if($GLOBALS['psr_orderby'] == $sort_type)
				$class = 'class="psr-selected"';
			else
				$class = 'class="psr-deselected"';
		
			$sort_type = array_search($sort_type, $psr_widget);
			$uri = psr_generate_uri($sort_type);
			
			$output = $instance['item_format'];
			$output = str_replace('%class', $class, $output);
			$output = str_replace('%uri', $uri, $output);
			$output = str_replace('%display', $link_name, $output);
			echo $output;
		}
		echo $instance['after_all'];

		echo $after_widget;
	}

	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);

		$instance['before_all'] = $new_instance['before_all'];
		$instance['item_format'] = $new_instance['item_format'];
		$instance['after_all'] = $new_instance['after_all'];

		$psr_widget_options = array();
		if(isset($instance['psr_widget_options']))
			$psr_widget_options = $instance['psr_widget_options'];

		$max = count($psr_widget_options) + 5;

		unset($psr_widget_options);
		$psr_widget_options = array();
		
		$psr_widget = get_option('psr_widget');
		
		for($i=1; $i<=$max; $i++){
			if(isset($new_instance['link_name_'.$i]) && $new_instance['link_name_'.$i] && isset($new_instance['sort_type_'.$i]) && $new_instance['sort_type_'.$i]){
				$link_name = htmlspecialchars(stripslashes($new_instance['link_name_'.$i]));
				$sort_type = htmlspecialchars(stripslashes($new_instance['sort_type_'.$i]));
				$psr_widget_options[$link_name] = $sort_type;
				
				// add the option
				if(!in_array($sort_type, $psr_widget))
					$psr_widget[] = $sort_type;
				
			}
		}
		
		update_option('psr_widget', $psr_widget);

		$instance['psr_widget_options'] = $psr_widget_options;

		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance) {
	
		$title = '';
		if(isset($instance['title']))
			$title = esc_attr($instance['title']);

		$before_all = '<ul>';
		if(isset($instance['before_all']))
			$before_all = esc_attr($instance['before_all']);

		$item_format = htmlspecialchars('<li %class><a href="%uri">%display</a></li>');
		if(isset($instance['item_format']))
			$item_format = esc_attr($instance['item_format']);

		$after_all = '</ul>';
		if(isset($instance['after_all']))
			$after_all = esc_attr($instance['after_all']);

		$psr_widget_options = array();
		if(isset($instance['psr_widget_options']))
			$psr_widget_options = $instance['psr_widget_options'];

		$max = count($psr_widget_options) + 5;
		
		echo '<p>Title: <input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title .'" /></p>';
		echo '<p>Before all: <input class="widefat" id="' . $this->get_field_id('before_all') . '" name="' . $this->get_field_name('before_all') . '" type="text" value="' . $before_all .'" /></p>';
		echo '<p>Item format (use <code>%class</code>, <code>%uri</code> and <code>%display</code>): <input class="widefat" id="' . $this->get_field_id('item_format') . '" name="' . $this->get_field_name('item_format') . '" type="text" value="' . $item_format .'" /></p>';
		echo '<p>After all: <input class="widefat" id="' . $this->get_field_id('after_all') . '" name="' . $this->get_field_name('after_all') . '" type="text" value="' . $after_all .'" /></p>';

		echo '<table>';
		for($i=1; $i<=$max; $i++){
			echo '<tr>';
			echo '<td>Display name '.$i.':</td>';
			echo '<td><input type="text" id="' . $this->get_field_id('link_name_'.$i) . '" name="' . $this->get_field_name('link_name_'.$i) . '" value="'.key($psr_widget_options).'"></td>';
			echo '<td>Sort type '.$i.':</td>';
			echo '<td><input type="text" id="' . $this->get_field_id('sort_type_'.$i) . '" name="' . $this->get_field_name('sort_type_'.$i) . '" value="'.current($psr_widget_options).'"></td>';
			echo '</tr>';

			next($psr_widget_options);
		}
		echo '</table>';
	}
}

add_action('widgets_init', create_function('', 'return register_widget("psr_widget");'));

function psr_generate_uri($sort_type){
	$uri = $_SERVER['REQUEST_URI'];

	if(strpos($uri, '?') === FALSE)
		$uri = $uri . '?sort=' . $sort_type;
	elseif(strpos($uri, 'sort=') === FALSE)
		$uri = $uri . '&sort=' . $sort_type;
	elseif(strpos($uri, '&') === FALSE)
		$uri = substr($uri, 0, strpos($uri, '?')) . '?sort=' . $sort_type;
	else{
		$request = explode('?', $uri);
		$args = explode('&', $request[1]);
		
		$uri = $request[0] . '?';
		foreach($args as $arg)
			if(strpos($arg, 'sort=') === FALSE)
				$uri .= $arg . '&';

		$uri .= 'sort=' . $sort_type;
	}

	return $uri;
}

<?php

add_action('admin_menu', 'psr_plugin_menu');

function psr_plugin_menu(){
	add_options_page('Post Sorting Reloaded', 'Post Sorting Reloaded', 'manage_options', 'psr', 'psr_plugin_options');
}

function psr_plugin_options(){

	if (!current_user_can('manage_options')){
		wp_die('You do not have sufficient permissions to access this page.');
	}

	$psr_options = get_option('psr_options');

	$max = count($psr_options) + 5;

	if( isset($_POST[ 'submit_hidden' ]) && $_POST[ 'submit_hidden' ] == 'Y' ) {
		unset($psr_options);
		$psr_options = array();
		for($i=1; $i<=$max; $i++){
			if(isset($_POST['condition_'.$i]) && $_POST['condition_'.$i] && isset($_POST['sort_type_'.$i]) && $_POST['sort_type_'.$i]){
				$condition = htmlspecialchars(stripslashes($_POST['condition_'.$i]));
				$sort_type = htmlspecialchars(stripslashes($_POST['sort_type_'.$i]));
				$psr_options[$condition] = $sort_type;
			}
		}

		update_option('psr_options', $psr_options);

		echo '<div class="updated"><p><strong>Your settings have been saved.</strong></p></div>';
	}

	?>

	<div class="wrap">

	<h2>Post Sorting Reloaded Settings</h2>
	
	<form name="form" method="post" action="">
	
	<table>

	<?php
	
	for($i=1; $i<=$max; $i++){
		echo '<tr>';
		echo '<td>Condition '.$i.':</td>';
		echo '<td><input type="text" name="condition_'.$i.'" value="'.key($psr_options).'"></td>';
		echo '<td>Sort type '.$i.':</td>';
		echo '<td><input type="text" name="sort_type_'.$i.'" value="'.current($psr_options).'"></td>';
		echo '</tr>';

		next($psr_options);
	}

	?>

	<tr>
		<td></td>
		<td>
			<p><strong>Condition examples:</strong></p>
			<ul>
				<li>is_home()</li>
				<li>is_category('Books')</li>
				<li>is_tag()</li>
				<li>is_admin()</li>
				<li>is_author('bob')</li>
				<li><a href="http://codex.wordpress.org/Conditional_Tags">see more</a></li>
			</ul>
		</td>
		<td></td>
		<td>
			<p><strong>Sort type examples:</strong></p>
			<ul>
				<li>post_title ASC</li>
				<li>post_date ASC</li>
				<li>post_date DESC</li>
				<li>post_excerpt ASC</li>
				<li>post_content ASC</li>
				<li>comment_count DESC</li>
			</ul>
		</td>
	</tr>
	
	</table>

	<p class="submit">
	<input type="hidden" name="submit_hidden" value="Y">
	<input type="submit" name="Submit" class="button-primary" value="Update" />
	</p>

	</form>
	</div>

	<?php

}

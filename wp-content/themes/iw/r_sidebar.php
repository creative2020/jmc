<!-- begin r_sidebar -->

<div id="r_sidebar">

	<ul id="r_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar') ) : else : ?>

	<li><div id="box">
	<h1>About</h1>
		<p>This is an area on your website where you can add text.  This will serve as an informative location on your website, where you can talk about your site.</p></div>
	</li>
		
<li>
<div id="box">
<h1>Stay Connected</h1>
	<ul><li><div class="feedarea"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"> RSS feed</a></div>
    	</li>
     </ul>
     </div>
	</li>	
    <li>
    <div id="box">
	<h1>Categories</h1>
		<ul>
			<?php wp_list_cats('sort_column=name'); ?>
		</ul>
        </div>
	</li>
    	
	<li>
    <div id="box">
	<h1>Blogroll</h1>
		<ul>
			<?php get_links(-1, '<li>', '</li>', ' - '); ?>
		</ul>
    </div>    
	</li>
		
       
	<?php endif; ?>
    
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar2') ) : else : ?>
     <li><div id="box2">
        <h1>Admin</h1>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://wordpress.org/">WordPress</a></li>
			<?php wp_meta(); ?>
			<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
		</ul></div>
</li>
    <?php endif; ?>
	</ul>
			
</div>

<!-- end r_sidebar -->
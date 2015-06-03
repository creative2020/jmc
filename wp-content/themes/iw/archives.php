<?php get_header(); ?>

		<div id="content">
        	<div id="left_col">
            	<h2>Archives by Month:</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archives by Subject:</h2>
	<ul>
		 <?php wp_list_categories(); ?>
	</ul>
</div>
            
            </div>
            
            <?php include(TEMPLATEPATH."/r_sidebar.php");?>
        
        
        </div>
        
        
<?php get_footer(); ?>        
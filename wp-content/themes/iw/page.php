<?php get_header(); ?>

<div id="banner">
<img src="<?php bloginfo('template_directory'); ?>/images/main-ins.jpg" />
</div>

		<div id="content">
        	<div id="left_col">
            	<?php if (have_posts()) : ?>
                

		<?php while (have_posts()) : the_post(); ?>
        
<!-- item -->
				<div class="item entry" id="post-<?php the_ID(); ?>">
				          <div class="itemhead">
                          
				            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				            
				          
						  
								<?php the_content('Continue reading  &raquo;'); ?>
						 
				         
							 <div style="clear:both;"></div>
<div style="clear:both;"></div>
				 </div></div>
<!-- end item -->

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
			<p> </p>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
<!-- end content -->
            
            </div>
            
            <?php include(TEMPLATEPATH."/r_sidebar.php");?>
        
        
        </div>
        
        
<?php get_footer(); ?>        
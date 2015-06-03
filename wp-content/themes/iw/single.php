<?php get_header(); ?>

		<div id="content">
        	<div id="left_col">
            	<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>
				<!-- item -->
					<div class="item entry" id="post-<?php the_ID(); ?>">
				          <div class="itemhead">
                          
				          
						 <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				           <div style="border-top:#cfd0d2 thin solid; border-bottom:#cfd0d2 thin solid; margin-top:10px; margin-bottom:10px;height:18px;padding-top:5px;">
               			 Category: <span class="category"><?php the_category(', ') ?> </span> | <?php printf( __(' %1$s on %2$s', 'query-posts'), '', '' . sprintf( get_the_time( __('F jS, Y', 'query-posts') ) ) . '' ); ?> by <a href="<?php get_author_posts_url( get_the_author_ID() )?>"><?php the_author() ?></a> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('Comment (0)', ' Comment (1)', 'Comments (%)'); ?> <?php if ( function_exists('the_tags') && get_the_tags()) {the_tags('| Tags: ', ', ', ' ');} ?> 
               			 </div>
                           
				          
						  
								<?php the_content('Continue reading  &raquo;'); ?>
						 
				          
							 <div style="clear:both;"></div>
							<div style="clear:both;"></div>
						 </div></div>
				<!-- end item -->

		<?php comments_template(); // Get wp-comments.php template ?>
		
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
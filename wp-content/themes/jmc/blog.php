<?php

/*
Template Name: Blog
*/

?>

<?php get_header(); ?>
  <!--Content-->
  <div id="inside">
    <div id="left">
      
      <div class="blog_title">
        <?php if (is_category('Products')) { ?>
          <h1>Products</h1>
          <h2><?php single_cat_title(); ?></h2>
          <!--<h2><?//php $category = get_the_category(); echo $category[0]->cat_name; ?></h2>-->
          <div class="clear"></div>
        <?php } elseif (is_category('Manufacturers')) { ?>
          <h1>Products</h1>
          <h2><?php single_cat_title(); ?></h2>
          <div class="clear"></div>
        <?php } elseif (is_single()) { ?>
          <h1>Products</h1>
          <h2><?php single_cat_title(); ?></h2>
          <div class="clear"></div>
        <?php } else { ?>
          <h1>Products</h1>
          <div class="clear"></div>
        <?php } ?>
      </div>
      <div class="line"></div>

       <?php $numposts = get_option('posts_per_page'); ?>
	   <?php $blog_query = new WP_Query('showposts='.$numposts.'&paged='.$paged); ?>
	   <?php if($blog_query->have_posts()) : while($blog_query->have_posts()) : $blog_query->the_post(); ?>
	
	   <!--Post Wrapper Class-->
	   <div <?php if (function_exists('post_class')) post_class(); ?>>
	
       <!--Blog-->
       <div id="product">
         <div class="img">
           <?php the_attached_image(); ?>
         </div>
         <div id="right">
           <h2><a href="<?php the_permalink() ?>" rel="bookmark" style="text-decoration:none;"><?php the_title(); ?></a></h2>
	       <?php the_content(); ?>
         </div>
         <div class="clear"></div>
       </div>
       <div class="line"></div>

	<!--for paginate posts-->
	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>    
    
    </div><!--end .post div-->
	
	<?php endwhile; // end of one post ?>
	
    <!-- Previous/Next page navigation -->
    <div class="page-nav">
      <div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Page')) ?></div>
	  <div class="alignright"><?php next_posts_link(__('Next Page &raquo;')); ?></div>
    </div>   

	<?php else : // do not delete ?>
	
	<h3><?php _e("Page not Found"); ?></h3>
    <p><?php _e("We're sorry, but the page you're looking for isn't here."); ?></p>
    <p><?php _e("Try searching for the page you are looking for or using the navigation in the header or sidebar"); ?></p>

    <?php endif; // do not delete ?>
    </div>
    <!--Sidebar-->
    <div id="side">
      <?php include (TEMPLATEPATH . '/inside_sidebar_widget.php'); ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php include (TEMPLATEPATH . '/footer_inside.php'); ?>

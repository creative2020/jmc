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
      
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--Blog-->
        <div id="product">
          <div class="img">
            <?php the_attached_image('image_order=2'); ?>
          </div>
          <div id="right">
            <?php print_post_title() ?>
	        <?php the_content(__('Read more'));?>
            <!--<?php trackback_rdf(); ?>-->
          </div>
          <div class="clear"></div>
        </div>
        <div class="line"></div>

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    </div>
    <!--Sidebar-->
    <div id="side">
      <?php include (TEMPLATEPATH . '/inside_sidebar_widget.php'); ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php include (TEMPLATEPATH . '/footer_inside.php'); ?>
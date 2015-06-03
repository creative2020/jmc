<?php get_header(); ?>

<!--Content-->
<div id="inside">
  <div id="left">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    
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
          <h2>Item Detail</h2>
          <div class="clear"></div>
        <?php } else { ?>
          <h1>Products</h1>
          <div class="clear"></div>
        <?php } ?>
      </div>
      <div class="line"></div>
    
    <!--Blog-->
    <div id="product">
      <div id="full">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <?php the_content('Continue reading  &raquo;'); ?>
      </div>
      <div class="clear"></div>
    </div>
    <!-- end item -->
    <?php comments_template(); // Get wp-comments.php template ?>
    <?php endwhile; ?>
    <div class="navigation">
      <div class="alignleft">
        <?php next_posts_link('&laquo; Previous Entries') ?>
      </div>
      <div class="alignright">
        <?php previous_posts_link('Next Entries &raquo;') ?>
      </div>
      <p> </p>
    </div>
    <?php else : ?>
    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
    <!-- end content -->
  </div>
  <!--Sidebar-->
    <div id="side">
      <?php include (TEMPLATEPATH . '/inside_sidebar_widget.php'); ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php include (TEMPLATEPATH . '/footer_inside.php'); ?>

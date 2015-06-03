<?php

/*
Template Name: Page
*/

?>

<?php get_header(); ?>
  <!--Content-->
  <div id="inside">
    <div id="left">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
        <h1><?php the_title(); ?></h1>
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      <?php endwhile; endif; ?>
      <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </div>
    <!--Sidebar-->
    <div id="side">
      <?php include (TEMPLATEPATH . '/inside_sidebar_widget.php'); ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php include (TEMPLATEPATH . '/footer_inside.php'); ?>
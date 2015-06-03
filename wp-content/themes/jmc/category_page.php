<?php

/*
Template Name: category
*/

?>

<?php get_header(); ?>
  <!--Content-->
  <div id="inside">
    <div id="left">
      
      <div class="blog_title">
        <h1>Categories</h1>
        <div class="clear"></div>
        <p>
          <a href="/category/manufacturers">[ View Manufacturers ]</a> <a href="/categories">[ View Categories ]</a>
        </p>
      </div>
      <div class="line"></div>

      <?php include (TEMPLATEPATH . '/category_widget.php'); ?>

    </div>
    <!--Sidebar-->
    <div id="side">
      <?php include (TEMPLATEPATH . '/inside_sidebar_widget.php'); ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php include (TEMPLATEPATH . '/footer_inside.php'); ?>

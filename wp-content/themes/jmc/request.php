<?php

/*
Template Name: Request
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
      <div class="clear"></div>
      <p>&nbsp;</p>
      <form action="http://johnmcclelland.com/data/process.php" method="post">
      <input type="hidden" name="form_tools_form_id" value="1" />
        <p>
          <label>Name:</label>
          <input name="name" type="text" id="name" class="input" />
        </p>
        <p>
          <label>Company / Organization:</label>
          <input name="company" type="text" id="company" class="input" />
        </p>
        <p>
          <label>Email Address:</label>
          <input name="email" type="text" id="email" class="input" />
        </p>
        <p>
          <label>Phone:</label>
          <input name="phone" type="text" id="phone" class="input" />
        </p>
        <p>
          <label>Inquiry:</label>
          <textarea name="questions" rows="3" class="input_message" id="questions"></textarea>
        </p>
        <p>
          <label></label>
          <input name="submit" type="submit" class="submit_btn" id="submit" value="Submit" />
        </p>
      </form>
    </div>
    <!--Sidebar-->
    <div id="side">
      <?php include (TEMPLATEPATH . '/inside_sidebar_widget.php'); ?>
    </div>
    <div class="clear"></div>
  </div>
  <?php include (TEMPLATEPATH . '/footer_inside.php'); ?>
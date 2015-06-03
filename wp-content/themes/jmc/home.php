<?php

/*
Template Name: Home
*/

?>

<?php get_header(); ?>
  <!--Content-->
  <div id="content"> 
    <!--Header-->
    <div id="header">
      <?php include (TEMPLATEPATH . '/header_widget.php'); ?>
    </div>
    <!--Sidebar-->
    <div id="sidebar">
      <div id="quote">
        <h2>Request a Quote</h2>
        <form action="http://johnmcclelland.com/data/process.php" method="post">
        <input type="hidden" name="form_tools_form_id" value="1" />
          <p>
            <label>First and Last Name</label>
            <input name="name" type="text" id="name" class="input" />
          </p>
          <p>
            <label>Company / Organization</label>
            <input name="company" type="text" id="company" class="input" />
          </p>
          <p>
            <label>Email Address</label>
            <input name="email" type="text" id="email" class="input" />
          </p>
          <p>
            <label>Phone</label>
            <input name="phone" type="text" id="phone" class="input" />
          </p>
          <p>
            <label>Inquiry</label>
            <textarea name="questions" rows="3" class="input_message" id="questions"></textarea>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit" />
          </p>
        </form>
      </div>
      <div id="green">
        <?php include (TEMPLATEPATH . '/green_widget.php'); ?>
      </div>
    </div>
    <!--Featured Products-->
    <div id="featured">
      <?php include (TEMPLATEPATH . '/featured_widget.php'); ?>
    </div>
    <div class="clear"></div>
    <!--Lower Section-->
    <div id="lower">
      <div class="left">
        <?php include (TEMPLATEPATH . '/lower_left_widget.php'); ?>
        <div class="more_btn">
          <a href="/about"></a>
        </div>
      </div>
      <div class="right">
        <?php include (TEMPLATEPATH . '/lower_right_widget.php'); ?>
        <div class="more_btn">
          <a href="/about"></a>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <?php get_footer() ?>

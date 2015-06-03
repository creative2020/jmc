<?php get_header(); ?>
<!--Content-->

<div id="inside">
  <div id="left">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><a href="<?php the_permalink() ?>" rel="bookmark">
      <?php the_title(); ?>
      </a></h1>
    <p>
      <?php the_time('F j, Y'); ?>
    </p>
    <?php the_content(__('Read more'));?>
    <div style="clear:both;"></div>
    <div class="postmeta2">
      <p>Posted by
        <?php the_author(); ?>
        | Filed Under
        <?php the_category(', ') ?>
        |
        <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
        &nbsp;
        <?php edit_post_link('(Edit)', '', ''); ?>
      </p>
    </div>
    <?php endwhile; else: ?>
    <p>
      <?php _e('Sorry, no posts matched your criteria.'); ?>
    </p>
    <?php endif; ?>
    <p>
      <?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>
    </p>
  </div>
  <!--Sidebar-->
  <div id="side">
    <?php include (TEMPLATEPATH . '/inside_sidebar_widget.php'); ?>
  </div>
  <div class="clear"></div>
</div>
<?php include (TEMPLATEPATH . '/footer_inside.php'); ?>
